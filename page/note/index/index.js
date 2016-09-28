Page({
	data:{
		imgList : [],
		indicatorDotsImg: true,
	    autoplayImg: true,
	    intervalImg: 5000,
	    durationImg: 1000,

		noteList : [],
		indicatorDotsList: false,
	    autoplayList: false,
	    intervalList: 5000,
	    durationList: 1000,
		
	},
	onLoad:function(options){
		this.getImgData();
		this.getNoteData();
		this.changeNav('阅读');
	},
	onShow:function(options) {
		this.changeNav('阅读');
	},
	changeNav:function (navTitle){
		wx.setNavigationBarTitle({
		  title: navTitle,
		});
	},
	getImgData:function () {//加载图片数据
		var that = this;
		var appInstance = getApp();
		wx.request({
			url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
			data: {
				act : 'noteimg'
			},
			header: appInstance.globalConfig.apiHeader,
			success:function(ret) {
				console.log(ret.data.content);
				if(ret.data.code==1000) {
					that.setData({
						imgList : ret.data.content,
					});
					
				}
			}
		});
	},
	getNoteData:function(){//加载文章列表
		var that = this;
		var appInstance = getApp();
		wx.request({
			url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
			data: {
				act : 'notelist'
			},
			header: appInstance.globalConfig.apiHeader,
			success:function(ret) {
				console.log(ret.data.content);
				if(ret.data.code==1000) {
					that.setData({
						noteList : ret.data.content,
					});
				}
			}
		});
	},
	redirectUrl: function(e) {
		var ids = e.currentTarget.id.split('_');
		wx.navigateTo({
		  url: 'detail?id='+ids[1]
		})
	}
})