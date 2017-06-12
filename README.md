# Vanilka

Vanilka is an wordpress starter theme.

## Features

- A clean head
- Helpful partials
- ES2015 & Sass
- Live-reload
- Customizable

## Installation

Clone the repository:

```bash
cd path/to/wp-site/wp-content/themes
git clone https://github.com/Nafta7/vanilka.git theme-name
cd theme-name
```

Install the dependencies:
```bash
npm install
```

Build the assets:
```bash
npm build
```

## Developing

### Watching assets

```bash
npm run watch
```

### Building assets

Development:

```bash
npm run build:development
```

Production:
```bash
npm run build:production
```

### Enabling live-reload

To enable live-reload you have to provide your local dev-server address to npm's package.json file. Open the **package.json** file and edit the *proxy* field in the *config* section with your local dev-server address.

Example:
```json
"config": {
  "proxy": "localhost:8000"
}
```

Now you can run *npm start* to let browser-sync do the live reload.

```bash
npm start
```

## Theme structure

```shell
themes/vanilka/           # Theme root
├── assets/               # Theme assets
│   ├── styles/           # Stylesheet files
│   │   └── main.scss     # Sass entry point file
│   └── scripts/          # JavaScript files
│       └── app.js        # JavaScript entry point file
├── core/                 # Wordpress theme selected features
├── node_modules/         # Node.js packages
├── partials/             # Partial templates
├── templates/            # Custom Wordpress templates
├── functions.php         # Wordpress hooks, theme includes
└──  package.json         # Node.js dependencies and scripts
```

## License

MIT.
