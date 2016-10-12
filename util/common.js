function setNavTitle(navTitle){
  wx.setNavigationBarTitle({
      title: navTitle,
  });
}

module.exports = {
  setNavTitle: setNavTitle
}
