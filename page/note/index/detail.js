var common = require('../../../util/common.js');

Page({
	data:{
		recordInfo : {},
		commentList :[],
		modalHidden : true
	},
	onLoad:function(options){
		var id = options.id ? options.id : '';
		if(id=='') {
			this.setData({
				modalHidden: false
			});
		} else {
			this.getRecordComment(id);
			this.getRecordDetail(id);
		}
	},
	getRecordDetail:function (id) {//加载文章详情
		var that = this;
		var appInstance = getApp();
		wx.request({
			url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
			data: {
				act : 'notedetail',
				id : id
			},
			header: appInstance.globalConfig.apiHeader,
			success:function(ret) {
				if(ret.data.code==1000) {
					that.setData({
						recordInfo : ret.data.content,
					});
					common.setNavTitle(ret.data.content.tag)
				}
			}
		});
	},
	getRecordComment:function(id){//加载文章评论
		var that = this;
		var appInstance = getApp();
		wx.request({
			url: appInstance.globalConfig.apiDomain + 'oneApp/index.php',
			data: {
				act : 'notecomment',
				id : id
			},
			header: appInstance.globalConfig.apiHeader,
			success:function(ret) {
				if(ret.data.code==1000) {
					that.setData({
						commentList : ret.data.content,
					});
				}
			}
		});
	},
	backNav :function(){//回退至上一页
		wx.navigateBack()
	},
	navigateAuthor: function (e) {
		var ids = e.currentTarget.id.split('_');
		wx.navigateTo({
		  url: 'author?id='+ids[1]
		})
	}
})