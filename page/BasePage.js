function BasePage(object) {
	this.setNavTitle = function(title) {
		wx.setNavigationBarTitle({
		  title: title,
		});
	}
}

BasePage.prototype = new Page();