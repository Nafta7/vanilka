# Vanilka

Vanilka is an wordpress starter theme.

## Features

- Sass
- ES2015
- Live-reload
- Modular *functions.php*

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
  "proxy": "localhost:8000",
  "port": "3000"
}
```

Now you can run *npm start* to let browser-sync do the live reload for us.

```bash
npm start
```

## License

MIT.
