# AutoRotate
![Version](https://img.shields.io/badge/version-1.0.0-green.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![Kirby Version](https://img.shields.io/badge/Kirby-2.3.2%2B-red.svg)

[Kirby](http://getkirby.com) plugin to automatically rotate images.

## Installation

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install mightymango/autorotate
```

### 2. Manual
[Download this archive](https://github.com/mightymango/autorotate/archive/v1.0.zip), extract it and rename it to `autorotate`. Copy the folder to your `site/plugins` folder.

### 3. Git Submodule
If you know your way around git, you can download this as a submodule:

```
git submodule add https://github.com/mightymango/autorotate/ site/plugins/autorotate
```

## Usage
The plugin adds a hook so that any image is automatically processed when it is uploaded.

If you wish to disable the hook for any reason just add the following to your config.php file:

```
c::set('autorotate.enabled', false);
```

## Note
This plugin only autorotates images that have EXIF orientation flags, in both landscape and portrait orientation. Typically these are images that have been created on an iPhone etc.

If an image has been edited and it's orientation changed prior to uploading, this plugin will have no effect. Neither will it fix images that have been uploaded before the plugin was installed.

For this plugin to work it requires that Imagick has been compiled against ImageMagick version 6.3.0 or higher.

## Looking for images to test?
Check out [recurser/exif-orientation-examples](https://github.com/recurser/exif-orientation-examples)

## Credits
Based on code from [orrd101 at yahoo dot com ](http://php.net/manual/en/imagick.getimageorientation.php#111448).

Readme file based on template by [Thiousi](https://github.com/Thiousi/kirby-plugin-starterkit)

## License
MIT

## Changelog
### 1.0.0
- Initial release
