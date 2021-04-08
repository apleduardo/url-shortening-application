# Shortner url application

## About Shortner url application

This application is used to create shorter aliases for long URLs.

## Dependences

Docker
Docker compose
Symfony php framework
Graphql 
MariaDB 

## Structure
```
docker
│   ├── database
│   ├── logs
│   ├── nginx
│   └── php-fpm
└── src
    ├── bin
    ├── config
    ├── migrations
    ├── public
    ├── src
    ├── templates
    ├── tests
    ├── var
    └── vendor
```


## Install

1 clone the project
2 set yours enviorioment variables in docker/.env, you can use the default's, if attends yourself requiriments.

3 up the application 
``` bash
$ cd docker/
$ docker-compose up
```

## Usage

Access http://localhost/graphiql
with the json below and enjoy :) 

``` bash
mutation{
  createShortner(input: {
    originalUrl: "https://stackoverflow.com/questions/51612208/how-to-delete-cached-intermediate-docker-images-after-the-cache-gets-invalidated"
  }) {
    url
 } 
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

In /docker run:

``` bash
$ docker-compose exec php-fpm bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
