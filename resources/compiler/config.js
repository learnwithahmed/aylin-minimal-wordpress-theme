module.exports = {
  context: 'assets',
  entry: {
    styles: './styles/main.scss',
    scripts: './scripts/main.js'
  },
  devtool: 'cheap-module-eval-source-map',
  outputFolder: '../dist',
  publicFolder: 'dist',
  proxyTarget: 'http://app.local',
  watch: [
    '../**/*.php'
  ]
}
