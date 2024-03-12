# WP API Starter Theme (ALPHA VERSION 1.0.0)

WordPress starter theme with [WP API](https://developer.wordpress.org/rest-api/) components and templates, [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli) and more...
<br/>

## Sponsors

**WP API Starter Theme** is an open source project and completely free to use.

However, the amount of effort needed to maintain and develop new features and products within the ecosystem is not sustainable without proper financial backing. If you have the capability, please consider [sponsoring Flaubert Dev](https://github.com/sponsors/flaubert-dev).

## Features

- Harness the power of [WP API](https://developer.wordpress.org/rest-api/).
- Frontend development workflow.
- Support for use for [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli).

## Requirements

Make sure all dependencies have been installed before moving on:

- [WordPress](https://wordpress.org/) >= v6.0.0
- [PHP](https://secure.php.net/manual/en/install.php) >= v8.2.0
- [Composer](https://getcomposer.org/download/) >= v2.7.1
- [Node.js](https://nodejs.org/en/download/) >= v20.11.1
- [Terser](https://github.com/terser/terser/) >= v5.29.1
- [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli/) = v3.3.3

## Theme installation

First command:

```sh
composer dump-autoload
```

Second command:

```sh
npm install
```

## Theme development

Use the command to watch at your .css files

```sh
npm run css:watch
```

## Build commands

Use the command to minify your .css files

```sh
npm run css:minify
```

Use the command to minify your .js files

```sh
npm run js:minify
```

## Theme structure

```sh
themes/your-theme-name/   
├── app/                  
│   ├── Acf/              
│   └── Contents/         
├── config/                
├── resources/         
│   ├── fonts/        
│   ├── scripts/      
│   ├── styles/     
│   └── views/          
├── 404.php      
├── archive.php      
├── category.php      
├── composer.json      
├── footer.php      
├── functions.php      
├── header.php      
├── index.php          
├── package.json        
├── page.php        
├── screenshot.png       
├── search.php       
├── single.php       
├── style.css                    
├── style.min.css                    
├── tailwind.config.js                    
├── tailwindcss.exe       # -> https://github.com/tailwindlabs/tailwindcss/releases/tag/v3.3.3      
└── template-custom.php
```

## Community

Keep track of development and community news.

- Follow me on Discord []()
- Also participate by collaborating with this project []()
- Sponsors []()
