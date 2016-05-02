# Hakon CMS

![License](https://img.shields.io/badge/Build-None-red.svg)
![Build Status](https://img.shields.io/badge/License-MIT-blue.svg)

## Install

To see it working, just run:

```html
php hakon start
```

## Hooks

Here's how you call a Hook from the template:

```html
{{ Html::Hook("Name::Of::The:Hook") }}
```

Example:


```html
{{ Html::Hook("Core::Template::Menu::Before") }}
```

## Licenses

The Hakon CMS is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

PHP and related libraries are distributed under the PHP License v3.01. Find out more at [PHP.net](http://www.php.net/license/3_01.txt)