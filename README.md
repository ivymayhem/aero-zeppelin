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
- Automatic image resizing with Glide

## Frontend Build Details

- Built with [TailwindCSS 3](https://tailwindcss.com/docs/installation)
- Compiled with [Laravel Mix](https://laravel-mix.com)
- Icons provided by [Feather Icons](https://feathericons.com)

## Quick Start

### Create a new site

Either create a new site:

```
statamic new mysite ivymayhem/aero-zeppelin
```

Or install into an existing site:

```
php please starter-kit:install ivymayhem/aero-zeppelin
```

### Create a super user

Just follow the instructions or run `php please make:user` and make yourself a `super` user.

### Recompile the CSS

To make sure there are no issues with Laravel Mix (e.g. "Unable to locate Mix file"), you should run `npx mix` after the Starter Kit was successfully installed.

## Upcoming

This Starter Kit is actively maintained. Some of the upcoming features include ...

- Custom Fieldset "Video" to add YouTube and Vimeo media (with GDPR required consent)
- Light Mode / Dark Mode switch
- Custom SEO fields
- Twitter Card and OG Image support

If you have a feature wish, or other questions regarding the Starter Kit, feel free to get in touch at andreas@ivymayhem.io or on [Twitter](https://twitter.com/MrMooky).