var common = require('../../../util/common.js')
Page({
	data: {
	    navTitle: '电影'
	},
	onLoad:function(options) {
		common.setNavTitle(this.data.navTitle);
	},
	onShow:function(options) {
		common.setNavTitle(this.data.navTitle);
	},
})

