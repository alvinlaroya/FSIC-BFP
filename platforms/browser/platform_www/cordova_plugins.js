cordova.define('cordova/plugin_list', function(require, exports, module) {
module.exports = [
    {
        "file": "plugins/cordova-plugin-facebook4/www/facebook-browser.js",
        "id": "cordova-plugin-facebook4.FacebookConnectPluginBrowser",
        "pluginId": "cordova-plugin-facebook4",
        "clobbers": [
            "facebookConnectPlugin"
        ]
    }
];
module.exports.metadata = 
// TOP OF METADATA
{
    "cordova-plugin-whitelist": "1.3.4",
    "cordova-plugin-facebook4": "6.4.0",
    "cordova-plugin-customurlscheme": "5.0.1"
}
// BOTTOM OF METADATA
});