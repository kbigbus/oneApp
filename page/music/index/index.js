var common = require('../../../util/common.js');

Page({
	data: {
		list : [],
		indicatorDots: false,
	    autoplay: false,
	    interval: 5000,
	    duration: 1000,
	    navTitle: '音乐'
	},
	onLoad:function(options){
		common.setNavTitle(this.data.navTitle);
		this.getList();
	},
	onShow:function(options) {
		common.setNavTitle(this.data.navTitle);
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
					var i;
					for(i in ret.data.content) {
						ret.data.content[i].audio = {method: 'pause'};
					}
					that.setData({
						list : ret.data.content,
					});

				}
			}
		});
	},
	audioPlayed: function(e) { //点击开始
		var ids = e.currentTarget.id.split('_');
		var id = ids[1];
		var i;
		for(i in this.data.list) {
			//console.log(this.data.list[i].id);
			if(this.data.list[i].id != id) {
				console.log(this.data.list[i].id);
				this.data.list[i].audio = {method: 'pause'};
			}
		}
	}
});
