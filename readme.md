# eFuzyon: Hakon CMS

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

## License

The "eFuzyon: Hakon CMS" is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).