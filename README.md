# Aylin

Boilerplate aims to be compatible with a large range of PHP versions, however, still have modern tooling for developing a theme.

What's inside?

- [Webpack](//webpack.js.org/) - Module Bundler
- [SASS](//sass-lang.com/) - a CSS preprocessor
- [Babel](//babeljs.io/) - JavaScript ES6 to ES5 compiler
- [Stylelint](//stylelint.io/) - a SCSS linter
- [Prettier](//prettier.io/) - a SCSS linter
- [ESLint](//eslint.org/) - a JavaScript linter

### Requirements

Boilerplate follows a [WordPress Minimal Requirements](https://wordpress.org/about/requirements/). Make sure you have `PHP >= 5.2.4` installed before moving on.

Theme uses [YARN](https://yarnpkg.com/en/docs/install#mac-stable) as a Front-end dependency manager. Make sure your machine has installed following dependencies:

- [Node.js](//nodejs.org/)
- [YARN](https://yarnpkg.com/en/docs/install#mac-stable)
- If you would like to use [NPM](//www.npmjs.com/) make sure to install it instead.

## Installation

WordPress themes lives in the `wp-content/themes` folder. This is where we have to fetch our fresh files.

```bash
# Go to the `themes` directory of your WordPress installation.
$ cd wp-content/themes
```

Clone the repository to the `wp-content/themes` directory.

```bash
# Clone repository
$ git clone -b master git@github.com:code2gether/aylin.git
# or if you want to rename the theme directory name
$ git@github.com:code2gether/aylin.git <theme-name>
```

## Development

[Wepback](https://webpack.js.org/) module bundler is used to processes the application and optimize theme's scripts, stylesheets, and images.

#### Resolving front-end dependencies

Before being able to build theme you have to resolve required dependencies.

```bash
# Go to the `wp-content/themes/aylin/resources` directory
# Install node dependencies.

$ yarn | npm i
```

Now you have all the packages necessary to run the build process and start developing your theme.

#### Building a Theme

There are a few available commands which help you to build the theme for different environments:

```bash
# Go to the `wp-content/themes/aylin/resources` directory

# Compiles unminified and unoptimized theme assets with source maps.
$ yarn serve | npm run serve

# Compiles minified and optimized theme assets without source maps.
$ yarn build | npm run build
```

#### Resources Structure

```bash
resources/
|-- fonts/ # Custom typefaces goes here.
|   |-- .gitkeep
|-- images/ # Put static images here.
|   |-- .gitkeep
|-- scripts/ # Put JS scripts here.
|   |-- main.js
|-- styles/ # Styles goes here.
|   |-- helpers/ # Useful SCSS helpers
|   |-- _global.scss # global style for theme
|   |-- main.scss # Put your custom SCSS modules here
```

## Contributing

Great that you are considering supporting the project. You have a lot of ways to help us grow. We appreciate all contributions, even the smallest.

- Report an issue
- Propose a feature
- Send a pull request
- Star project on the [GitHub](https://github.com/code2gether/aylin)
- Tell about project around your community

## License

Aylin is licensed under the [MIT license](http://opensource.org/licenses/MIT).
