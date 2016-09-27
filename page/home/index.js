Page({
	data: {
		list :[1,2],
		indicatorDots: false,
	    autoplay: false,
	    interval: 0,
	    duration: 1000,
		modalHidden:false,//默认不隐藏弹窗
	},
	onLoad:function(options){
		this.getIndexData();
	},
	getIndexData:function () {//加载初始化数据
		var that = this;
		var appInstance = getApp();
		wx.request({
			url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
			header: {
		      'Content-Type': 'application/json'
		  	},
			success:function(ret) {
				console.log(ret.data.content);
				if(ret.data.code==1000) {
					that.setData({
						list : ret.data.content,
						modalHidden : true
					});
				}
			}
		});
	},
	modalChange: function(e) {
		this.setData({
		  modalHidden: true
		})
	}
});
