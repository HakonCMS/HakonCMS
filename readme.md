# Hakon CMS

![Build Status](https://img.shields.io/badge/Build-None-red.svg)
![License](https://img.shields.io/badge/License-MIT-blue.svg)

## Install

You can clone this repository or create a project using [Composer](https://packagist.org/packages/hakoncms/hakoncms)

```
$ composer create-project hakoncms/hakoncms -s dev
```

## Usage

After the installation process you need to run:

```
$ php hakon start
Laravel development server started on http://localhost:8000/
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

## Troubleshooting

At this time this project is still under development and as such may contain a lot of bugs and unfinished features.

## Security Vulnerabilities

If you discover a security vulnerability within Hakon CMS, please send an e-mail to hakoncms@efuzyon.com. All security vulnerabilities will be promptly addressed.

## Licenses

The Hakon CMS is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

PHP and related libraries are distributed under the PHP License v3.01. Find out more at [PHP.net](http://www.php.net/license/3_01.txt)