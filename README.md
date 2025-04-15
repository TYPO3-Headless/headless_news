# TYPO3 Extension "headless_news" - Provides fluid templates to render proper JSON from EXT:news
This extension provides integration to headless extension with news extension.

If you have any questions just drop a line in #initiative-pwa Slack channel.

## Requirements and compatibility

| Extension version  	 | TYPO3 version support | EXT:news version support | Status 	                              |
|----------------------|-----------------------|--------------------------|---------------------------------------|
| `4.0-dev` (upcoming)  	 | `12`, `13` 	          | `>= 12`  	               | Supported	                            |
| `3.0-dev`	 | `11`, `12` 	          | `>= 11 < 13`  	          | Deprecated, no longer supported	                            |
| `2.0`                | `10`, `11`	           | `<= 10`	                 | Deprecated, no longer supported       |
| `1.0` 	              | `9`, `10`	            | `< 10`	                  | Deprecated, no longer supported |

## TYPO3 Installation
Install extension using composer

``composer require friendsoftypo3/headless_news``

and then, include Typoscript template, and you are ready to go.

## NUXT-TYPO3 Installation
Add package with yarn

```bash
yarn install nuxt-typo3-headless-news
```

Add module to `nuxt.config.js`

```js
  modules: [
    'nuxt-typo3-headless-news',
    // Doc: https://github.com/TYPO3-Initiatives/nuxt-typo3
    'nuxt-typo3',
  ],
```

## Development
Development for this extension is happening as part of the TYPO3 PWA initiative, see https://typo3.org/community/teams/typo3-development/initiatives/pwa/

## Credits

A special thanks goes to [macopedia.com](https://macopedia.com) company, which is sponsoring development of this solution.

### Developers involved in the project

- Łukasz Uznański (Macopedia)
- Adam Marcinkowski (Macopedia)
