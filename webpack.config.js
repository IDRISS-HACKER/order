const path = require('path');

module.exports = {
	entry: './resources/typescript/app',
	mode:  'development',
	module: {
		rules:[
		{
			test: /\.ts$/,
			use: 'ts-loader'
		}
		]
	},
	resolve: {
		extensions: [
			'.ts'
		]
	},
	output: {
		filename: 'app.js',
		path: path.resolve(__dirname, './public/js')
	}
}
