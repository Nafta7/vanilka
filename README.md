# Vanilka

Vanilka is an wordpress starter theme.

## Features

### Modern workflow

Write the latest version of JavaScript (ES2015) paired with Sass that are automatically compiled with support for live-reload on the browser as you save the files.

Manage front-end dependencies through npm.

### Minimalist

Does not include any framework or library like Bootstrap or jQuery, as well as any custom classes.

Only pure, lean markup. A blank canvas.

### Modular

Because the theme was build with modularity in mind, it's very easy to disable the theme features, head over to **functions.php** and you can opt-out of any functionality by commenting out the features.

## Install

```bash
cd path/to/wp-site/wp-content/themes
git clone https://github.com/Nafta7/vanilka.git theme-name
cd theme-name
npm install
npm build
```

## Live-reload

Open the **package.json** file and edit the *proxy* field in the
*config* section with the development address of the wordpress site.

Example:
```json
"config": {
  "proxy": "localhost:8000"
}
```

Now you can run *npm start* to let browser-sync do the live reload for us.

```bash
npm start
```

## License

MIT.
