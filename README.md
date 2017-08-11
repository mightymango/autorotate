# AutoRotate
![Version](https://img.shields.io/badge/version-1.0.0-green.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![Kirby Version](https://img.shields.io/badge/Kirby-2.3%2B-red.svg)

Description of plugin for [Kirby](http://getkirby.com)

![Screenshot]( http://placehold.it/888x250?text=Add+screenshots+whenever+possible)

## Installation

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install username/plugin-name
```

### 2. Manual
[Download this archive](https://github.com/Thiousi/kirby-plugin-starterkit/archive/master.zip), extract it and rename it to `plugin-name`. Copy the folder to your `site/plugins` folder.

### 3. Git Submodule
If you know your way around git, you can download this as a submodule:

```
git submodule add https://github.com/username/plugin-name/ site/plugins/plugin-name
```

## Usage
Describe what the user should do to make the plugin or field work...

Add to your blueprint the following:

```
  tinyurl:
    label: Tiny URL
    type: tinyurl
    help: Click on field to copy to clipboard
    width: 1/2
```


## To-do
- [ ] This is a to-do item. I try to create to-do for future features as well as for blocking bugs
- [X] ~~This is a completed to-do with strike-through text.~~

## Credits
Don't forget to give credit where it's due!

## License
MIT

## Changelog
### 1.0.0
- Initialial release
