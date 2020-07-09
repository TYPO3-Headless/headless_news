const { resolve } = require("path");

module.exports = async function () {
  this.addPlugin({
    src: resolve(__dirname, "plugin.js"),
    fileName: "nuxt-typo3-headless-news",
  });
};

module.exports.meta = require("../../../../../package.json");
