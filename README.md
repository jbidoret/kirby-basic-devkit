# Kirby Basic Dev Kit

Forked from [kirby-devkit](https://github.com/julien-gargot/kirby-devkit) by Julien Gargot + Louis Eveillard. Updated to Gulp 4. Added [cachebuster](https://github.com/schnti/kirby3-cachebuster.git),
[markdown-field](https://github.com/sylvainjule/kirby-markdown-field) and [kirby3-feed](https://github.com/bnomei/kirby3-feed.git) plugins to submodules.


# Kirby Dev Kit

This repo is a starting point to use Kirby 3 with Gulp and Npm. It is made for developers to bootstrap their own projects quickly.

## Requirements

You will need Npm and GIT (for the Kirby submodules) to use this project.

## Setup a new project

1. clone this repo:
  ```
  git clone https://github.com/jbidoret/kirby-basic-devkit.git your-project
  cd your-project
  git submodule update --init
  cd kirby
  composer update
  ```

2. install Npm from projct root:
  ```
  npm install
  ```

3. to compile all files, for **development** and **production** :
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

## Configure with your server/site settings

1. rename the file in `site/config/config.localhost.php` to your local development site URL [check out Multi-environment setup](http://getkirby.com/docs/advanced/options). The `environment` variable is used to load minified or unminified CSS/JS versions (checkout `snippets/header.php` and `snippets/footer.php`).
2. to be able to use browser sync (live reloading, remote debugging, and a few other nice features), set the `localDevUrl` variable to the URL of your site in `assets/manifest.js`.
