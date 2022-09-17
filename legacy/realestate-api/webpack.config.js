const path = require('path');
const nodeExternals = require('webpack-node-externals');


module.exports = {
  entry: './app.js',
  output: {
    filename: 'server.dist.js',
    path: path.resolve(__dirname, './')
  },
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: [
              [
                '@babel/preset-env', {
                  'targets': {
                    'node': 'current'
                  }
                }
              ]
            ],
            plugins: ['@babel/plugin-transform-runtime']
          }
        }
      }
    ]
  },
  externals: [nodeExternals()],
  mode: 'production',
  target: 'node',
  node: {
    __dirname: false
  },
  optimization: {
		// We no not want to minimize our code.
		minimize: false
	},
};
