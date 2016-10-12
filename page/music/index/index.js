Page({
	data: {
		list : [],
		indicatorDots: false,
	    autoplay: false,
	    interval: 5000,
	    duration: 1000,
	},
	onLoad:function(options){
		this.changeNav('音乐');
		this.getList();
	},
	onShow:function(options) {
		this.changeNav('音乐');
	},
	changeNav:function (navTitle){
		wx.setNavigationBarTitle({
		  title: navTitle,
		});
	},
	getList : function () {//加载音频与文字消息
		var that = this;
		var appInstance = getApp();
		wx.request({
			url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
			data: {
				act : 'music'
			},
			header: appInstance.globalConfig.apiHeader,
			success:function(ret) {
				if(ret.data.code==1000) {
					that.setData({
						list : ret.data.content,
					});
					var i;
					for(i in that.data.list) {
						that.data.list[i].audioAction = {method: 'pause'};
					}
				}
			}
		});
	}
});
