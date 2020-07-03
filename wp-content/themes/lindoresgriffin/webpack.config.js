const path = require("path");
const webpack = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

const config = {
  watch: true,
  mode: "production",
  entry: {
    bundle: ["./js/main.js"]
  },
  output: {
    filename: "index.js",
    path: path.resolve(__dirname)
  },
  target: "web",
  node: {
    fs: "empty" // Don't ask why.
  },
  module: {
    rules: [
      {
        test: /\.js?$/,
        exclude: /node_module/,
        loader: "babel-loader"
      },
      {
        test: /\.sass$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: ["css-loader?url=false", "postcss-loader", "sass-loader"]
        })
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin({ filename: "style.css" }),
    new BrowserSyncPlugin({
      files: ["./css/**/*.sass", "./*.php"],
      reloadDelay: 0,
      proxy: "http://localhost:8000"
    })
  ]
};

module.exports = config;
