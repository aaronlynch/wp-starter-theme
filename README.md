# WordPress Starter Theme

WP Starter Theme is a foundational starter theme for building out WordPress themes, websites, and projects. 

  - A just right amount of lean, well-commented, modern, HTML5 templates.
  - A helpful 404 template.
  - A sample custom header implementation in inc/custom-header.php that can be activated by uncommenting one line in functions.php and adding the code snippet found in the comments of inc/custom-header.php to your header.php template.
  - Custom template tags in inc/template-tags that keep your templates clean and neat and prevent code duplication.
  - Some small tweaks in /inc/extras.php that can improve your theming experience. They can be activated by uncommenting one line in functions.php.
  - Keyboard navigation for image attachment templates. The script can be found in js/keyboard-image-navigation.js and is enqueued from the image attachment template, image.php.
  - A script at js/navigation.js that makes your menu a toggled dropdown for small screens (like your phone) ready for CSS artistry. It’s enqueued in functions.php.
  - 5 sample CSS layouts in /layouts: Two sidebars on the left, two sidebars on the right, a sidebar on either side of your content, and two-column layouts with sidebars on either side.
  - Smartly organized starter CSS in style.css that will help you to quickly get your design off the ground.
  - The GPL license in license.txt. 🙂 Use it to make something cool.

### Dependencies

WP Starter Theme uses a number of open source projects to work properly:

* [AngularJS] - HTML enhanced for web apps!
* [Ace Editor] - awesome web-based text editor
* [markdown-it] - Markdown parser done right. Fast and easy to extend.
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [node.js] - evented I/O for the backend
* [Express] - fast node.js network app framework [@tjholowaychuk]
* [Gulp] - the streaming build system
* [Breakdance](https://breakdance.github.io/breakdance/) - HTML to Markdown converter
* [jQuery] - duh

And of course Dillinger itself is open source with a [public repository][dill]
 on GitHub.

### Installation

Dillinger requires [Node.js](https://nodejs.org/) v4+ to run.

Install the dependencies and devDependencies and start the server.

```sh
$ cd dillinger
$ npm install -d
$ node app
```

For production environments...

```sh
$ npm install --production
$ NODE_ENV=production node app
```

### Development

Want to contribute? Great!

Dillinger uses Gulp + Webpack for fast developing.
Make a change in your file and instantaneously see your updates!

Open your favorite Terminal and run these commands.

First Tab:
```sh
$ node app
```

Second Tab:
```sh
$ gulp watch
```

(optional) Third:
```sh
$ karma test
```

### Todos

 - Write MORE Tests
 - Add Night Mode

### License

MIT
