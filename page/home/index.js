Page({
	data: {
		list :[],
		indicatorDots: false,
	    autoplay: false,
	    interval: 5000,
	    duration: 1000,
		modalHidden:false,//默认不隐藏弹窗
	},
	onLoad:function(options){
		this.getIndexData();
	},
	changeNav:function (navTitle){
		wx.setNavigationBarTitle({
		  title: navTitle,
		});
	},
	getIndexData:function () {//加载初始化数据
		var that = this;
		var appInstance = getApp();
		wx.request({
			url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
			header: appInstance.globalConfig.apiHeader,
			success:function(ret) {
				console.log(ret.data.content);
				if(ret.data.code==1000) {
					that.setData({
						list : ret.data.content,
						modalHidden : true
					});
					for(i in that.data.list) {
						that.data.list[i].heartPicUrl = '../../icon/heart_' +(that.data.list[i].heartFill ? 'fill' :'empty')+'.png';
					}
				}
			}
		});
	},
	modalChange: function(e) {
		this.setData({
		  modalHidden: true
		})
	},
	//点击爱心 变换状态
	heartFill: function(e) {
		var appInstance = getApp();
		var imgId = e.currentTarget.id.split('_');
		var listData = this.data.list;
		for(i in listData) {
			var data = listData[i];//原数据
			if(imgId[1]==data.id) {
				listData[i].heartPicUrl = '../../icon/heart_' +(data.heartFill ? 'empty' :'fill')+'.png';
				listData[i].like = data.heartFill ? (parseInt(data.like) - 1) : (parseInt(data.like) + 1);
				listData[i].heartFill = data.heartFill ? false : true;

				//TODO 异步请求
				wx.request({
					url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
					data: {
						act:'heartHandle',
						handleType: (data.heartFill ? 'add' : 'desc'),
						userId: appInstance.globalData.loginData.userId ,
						imgId: data.id,
					},
					header: appInstance.globalConfig.apiHeader,
					success: function(res) {
						console.log(res)
					}
				})
			}
		}

		this.setData({
			list : listData
		});
	}
});
