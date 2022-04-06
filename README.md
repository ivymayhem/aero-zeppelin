## About

**aero.zeppelin** is a minimalistic Statamic Starter Kit for personal or even professional blogging.

## Features

- Minimalistic appearance (Is that a feature? I think it is.)
- Bard focused writing experience
- Code highlighting with [highlight.js](https://highlightjs.org)
- Customizable social links and icons
- Built with [TailwindCSS](https://tailwindcss.com)
- Some minor [Alpine.js](https://alpinejs.dev) stuff for interactions
- Custom Fieldset "Image" with options to include a caption and 3 different sizes
- Twitter Card and OG Image support
- Automatic image resizing with Glide

## Frontend Build Details

- Built with [TailwindCSS 3](https://tailwindcss.com/docs/installation)
- Compiled with [Laravel Mix](https://laravel-mix.com)
- Icons provided by [Feather Icons](https://feathericons.com)

## Quick Start

To get started with this Starter Kit, follow these steps:

### 1. Create a new site

Either create a new site:

```
statamic new mysite ivymayhem/aero-zeppelin
```

Or install into an existing site:

```
php please starter-kit:install ivymayhem/aero-zeppelin
```

### 2. Create a super user

Just follow the instructions shown in your terminal or run `php please make:user` and make yourself a `super` user.

### 3. Recompile the CSS

In case you have issues with Laravel Mix (e.g. "Unable to locate Mix file"), you can run `npx mix` after the Starter Kit was successfully installed.