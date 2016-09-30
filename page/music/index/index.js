Page({
	data: {
		sheetHidden : false
	},
	onLoad:function(options){
		this.changeNav('音乐');
	},
	onShow:function(options) {
		this.changeNav('音乐');
	},
	changeNav:function (navTitle){
		wx.setNavigationBarTitle({
		  title: navTitle,
		});
	},
});
