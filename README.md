# How to add the nuva lib to your project

```bash
composer config repositories.64 composer https://gitlab.mesvaccins.net/api/v4/group/64/-/packages/composer/packages.json

composer config gitlab-token.gitlab.mesvaccins.net <username> <token>

composer config gitlab-domains gitlab.mesvaccins.net

composer require syadem/nuva:<version>
```
