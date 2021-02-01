# Kirby Basic Dev Kit

Forked from [kirby-devkit](https://github.com/julien-gargot/kirby-devkit) by Julien Gargot + Louis Eveillard. 
Added [markdown-field](https://github.com/sylvainjule/kirby-markdown-field) plugin as submodule. 
Updated to Gulp 4 and Kirby 3.5.


# Kirby Dev Kit

This repo is a starting point to use Kirby 3 with Gulp and Npm. It is made for developers to bootstrap their own projects quickly.

## Requirements

You will need Npm and GIT (for the Kirby submodules) to use this project.

## Setup a new project

1. clone this repo (as of Git 2.23),
  ```
  git clone --recurse-submodules https://github.com/jbidoret/kirby-basic-devkit.git your-project 
  cd your-project
  ```
  Or, 
  ```
  git clone https://github.com/jbidoret/kirby-basic-devkit.git your-project
  cd your-project
  git submodule update --init --recursive
  ```

2. install npm package from project root:
  ```
  npm install
  ```



## Configure with your server/site settings

1. rename the file in `site/config/config.localhost.php` to your local development site URL. The `environment` variable is used to load minified or unminified CSS/JS versions (checkout `snippets/header.php` and `snippets/footer.php`).
2. to be able to use browser sync (live reloading, remote debugging, and a few other nice features), set the `localDevUrl` variable to the URL of your site in `assets/manifest.js`.

## Compile and sync
To compile all files, for **development** and **production** :
  ```
  gulp
  ```

  To make it faster, while developing, you can watch for changes to CSS and JS files in the assets folder. This task only compiles **development** files.
  ```
  gulp dev
  ```

  Same as `gulp dev` with live reload.
  ```
  gulp sync
  ```
  
  A routine has been set to bump version, and publish via git webhook. 
  ```
  gulp publish
  ```

  Alternatively, use `-t` arg, to tell whether it’s a *patch* (by default), *minor*, *major* version.
  ```
  gulp publish -t minor
  ```