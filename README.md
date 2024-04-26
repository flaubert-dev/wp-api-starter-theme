# WP API Starter Theme (BETA VERSION 1.0.0)

WordPress starter theme with [WP API](https://developer.wordpress.org/rest-api/) components and templates, [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli) and more... This WordPress theme is interesting for local testing, studies and code improvements. Please do not use this theme in production, use these themes for student purposes.
<br/>

## Sponsors

**WP API Starter Theme** is an open source project and completely free to use.

However, the amount of effort needed to maintain and develop new features and products within the ecosystem is not sustainable without proper financial backing. If you have the capability, please consider [sponsoring Flaubert Dev](https://github.com/sponsors/flaubert-dev).

## Features

- Harness the power of [WP API](https://developer.wordpress.org/rest-api/).
- Frontend development workflow. Use [Live Server Web Extension](https://chromewebstore.google.com/detail/live-server-web-extension/fiegdmejfepffgpnejdinekhfieaogmj) -> [See this tutorial](https://youtu.be/joxLj3O_QGo). 
- Support for use for [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli).

## Requirements

Make sure all dependencies have been installed before moving on:

- [Git Bash](https://git-scm.com/download/win) (Windows Users)
- [WordPress](https://wordpress.org/) >= v6.0.0
- [PHP](https://secure.php.net/manual/en/install.php) >= v8.2.0
- [Composer](https://getcomposer.org/download/) >= v2.7.1
- [Tailwind CSS](https://tailwindcss.com/blog/standalone-cli/) >= v3.3.3
- [Node.js](https://nodejs.org/en/download/) >= v20.11.1
- [Terser](https://github.com/terser/terser/) >= v5.30.3

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

Use the command to watch at your *.php, *.css and *.js files

```sh
npm run dev
```

## Build command

Use the command to minify your *.css and *.js files

```sh
npm run build
```

## Theme structure

```sh
themes/your-starter-theme-name/   
├── app/                  
│   ├── Acf/          # -> https://www.advancedcustomfields.com/resources/register-fields-via-php/              
│   ├── AcfJson/      # -> (Optional) https://www.advancedcustomfields.com/resources/local-json/             
│   ├── BlockEditor/             
│   ├── Contents/             
│   ├── Customizer/             
│   ├── Dashboard/             
│   └── Sanitizers/         
├── config/                
├── resources/         
│   ├── fonts/        
│   ├── scripts/      
│   ├── styles/     
│   └── views/          
├── .gitignore      
├── 404.php      
├── archive.php      
├── category.php      
├── composer.json      
├── footer.php      
├── functions.php      
├── header.php      
├── index.php          
├── LICENSE          
├── package.json        
├── page.php        
├── README.md       
├── readme.txt       
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

- Follow me on [Linkedin](https://www.linkedin.com/in/flaubert-dev/)
- Also participate by collaborating with [this project](https://github.com/flaubert-dev/wp-api-starter-theme/issues)
- Sponsors: None, for now...
