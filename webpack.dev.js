const path = require("path");
const common = require("./webpack.common");
const { merge } = require('webpack-merge');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');


module.exports = merge(common,{
    mode: "development",
    entry: "./src/index.js",
    output: {
        // filename: "main.[contenthash].js",
        filename: "main.js",
        path: path.resolve(__dirname,"dist")
    },
    watch: true,
    plugins: [
        new BrowserSyncPlugin({
          // browse to http://localhost:3000/ during development,
          // ./public directory is being served
          files: ["**/*.php",
          "./src/main.scss"],
          proxy: "http://localhost/baloons", 
        })
      ],
    // // watchOptions: {
    // //     poll: true,
    // //     ignored: /node_modules/
    // //    },
    // // devServer: {
    // //     static: {
    // //       directory: path.join(__dirname, 'dist'),
    // //     },
    // //     compress: true,
    // //     port: 9000,
    // //   },
    
});