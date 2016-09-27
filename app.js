App({
  onLaunch: function () {
    console.log('App Launch2')
  },
  onShow: function () {
    console.log('App Show')
  },
  onHide: function () {
    console.log('App Hide')
  },
  globalData: {
    hasLogin: false
  },
  globalConfig: {
    apiDomain: "http://www.local.com/",
  }
})
