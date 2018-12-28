module.exports = {
  context: 'assets',
  entry: {
    styles: './styles/main.scss',
    scripts: './scripts/main.js'
  },
  devtool: 'cheap-module-eval-source-map',
  outputFolder: '../build',
  publicFolder: 'build',
  proxyTarget: 'http://app.local',
  watch: [
    '../**/*.php'
  ]
}
