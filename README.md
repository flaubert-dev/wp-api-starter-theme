# WP API Starter Theme (BETA VERSION 1.0.0)

WordPress starter theme with [WP API](https://developer.wordpress.org/rest-api/) components and templates, [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli), and a modern development workflow. This WordPress theme is interesting for local testing, studies and code improvements. Please do not use this theme in production, use these themes for student purposes.
<br/>

## Sponsors

**WP API Starter Theme** is an open source project and completely free to use.

However, the amount of effort needed to maintain and develop new features and products within the ecosystem is not sustainable without proper financial backing. If you have the capability, please consider [sponsoring Flaubert Dev](https://github.com/sponsors/flaubert-dev).

## Features

- Harness the power of [WP API](https://developer.wordpress.org/rest-api/).
- Frontend development workflow with [Gulp](https://gulpjs.com/), [BrowserSync](https://browsersync.io/) and [Terser](https://github.com/terser/terser/).
- Support for use for [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli).

## Requirements

Make sure all dependencies have been installed before moving on:

- [Git Bash](https://git-scm.com/download/win) (Windows Users)
- [WordPress](https://wordpress.org/) >= v6.0.0
- [PHP](https://www.php.net/) >= v8.2.0
- [Composer](https://getcomposer.org/download/) >= v2.7.1
- [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli/) >= v3.3.3
- [Node.js](https://nodejs.org/en/download/) >= v20.11.1
- [Yarn](https://yarnpkg.com/) >= v1.22.22
- [Gulp CLI](https://gulpjs.com/) >= v3.0.0
- [BrowserSync](https://browsersync.io/) >= v3.0.2
- [Readable Stream](https://github.com/nodejs/readable-stream) >= v4.5.2
- [Terser](https://github.com/terser/terser/) >= v5.30.3

## Theme installation

[Fork](https://github.com/flaubert-dev/wp-api-starter-theme/fork) or download this WordPress theme in your themes folder. If you download by git clone, don't forget to remove the `.git` folder:

```sh
git clone git@github.com:flaubert-dev/wp-api-starter-theme.git
```

If you don't know if Gulp CLI and Yarn are already installed globally, run the command below:

```sh
npm list -g --depth=0
```

If Gulp CLI and Yarn are not installed globally, run the command:

```sh
npm install gulp-cli -g && npm install yarn -g
```

With Gulp CLI and Yarn already installed, run the command below:

```sh
yarn cache clean && yarn install && npx update-browserslist-db@latest
```

Linux and MacOs Users

- If you are using Linux, remove tailwindcss.exe and download the [Linux version (Tailwind CLI)](https://github.com/tailwindlabs/tailwindcss/releases/download/v3.3.3/tailwindcss-linux-x64). 
- Don't forget to rename it from tailwindcss-linux-x64 to tailwindcss, if in doubt, [check out more information](https://tailwindcss.com/blog/standalone-cli/).

- If you are using MacOS, remove tailwindcss.exe and download the [MacOs version (Tailwind CLI)](https://github.com/tailwindlabs/tailwindcss/releases/download/v3.3.3/tailwindcss-macos-x64). 
- Don't forget to rename it from tailwindcss-macos-x64 to tailwindcss, if in doubt, [check out more information](https://tailwindcss.com/blog/standalone-cli/).

## Theme development

In the gulpfile.js file, modify the path of your development environment:

```js
browserSync.init({
  proxy: 'http://localhost/success', // Change to your local development URL
  open: true // true will automatically open the browser on port 3000
});
```

## Dev command

Log in as an Administrator on your WordPress. Use this command to watch at your php, css and js files:

```bash
yarn dev
```

## Build command

To build the project use the command below. If you are not logged into WordPress, you will see that the css and js files have been minified:

```bash
yarn build
```

## Theme structure

```sh
themes/wp-api-starter-theme/  
├── app/                           
│   ├── AcfJson/ # -> https://www.advancedcustomfields.com/resources/local-json/             
│   └── Templates/      
├── config/                
├── resources/         
│   ├── fonts/        
│   ├── images/        
│   ├── scripts/      
│   └── styles/          
├── templates/      
├── vendor/     
├── .gitattributes
├── .gitignore
├── 404.php # -> Wait... News will come in this file
├── archive.php      
├── category.php      
├── composer.json      
├── footer.php      
├── functions.php      
├── gulpfile.js      
├── header.php      
├── index.php          
├── LICENSE          
├── package.json        
├── page.php # -> Wait... News will come in this file
├── README.md       
├── readme.txt       
├── screenshot.png       
├── search.php # -> Wait... News will come in this file
├── single.php # -> Wait... News will come in this file
├── style.css                                      
├── style.min.css                                      
├── tailwind.config.js                    
├── tailwindcss.exe # -> https://github.com/tailwindlabs/tailwindcss/releases/tag/v3.3.3      
└── template-wp-api-example-using-JS.php
```

## Community

Keep track of development and community news.

- Follow me on [Linkedin](https://www.linkedin.com/in/flaubert-dev/)
- Also participate by collaborating with [this project](https://github.com/flaubert-dev/wp-api-starter-theme/issues)
- Sponsors: None, for now...
