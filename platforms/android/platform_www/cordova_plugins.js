cordova.define('cordova/plugin_list', function(require, exports, module) {
  module.exports = [
    {
      "id": "cordova-plugin-facebook4.FacebookConnectPlugin",
      "file": "plugins/cordova-plugin-facebook4/www/facebook-native.js",
      "pluginId": "cordova-plugin-facebook4",
      "clobbers": [
        "facebookConnectPlugin"
      ]
    },
    {
      "id": "cordova-plugin-customurlscheme.LaunchMyApp",
      "file": "plugins/cordova-plugin-customurlscheme/www/android/LaunchMyApp.js",
      "pluginId": "cordova-plugin-customurlscheme",
      "clobbers": [
        "window.plugins.launchmyapp"
      ]
    }
  ];
  module.exports.metadata = {
    "cordova-plugin-whitelist": "1.3.4",
    "cordova-plugin-facebook4": "6.4.0",
    "cordova-plugin-customurlscheme": "5.0.1"
  };
});