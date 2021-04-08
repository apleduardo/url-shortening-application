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
2 set yours environment variables in docker/.env, you can use the default's, if attends yourself requirements.

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
you can run too the frontend application
``` bash
$ cd front/
$ yarn install
$ yarn start
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

- [Eduardo Araujo Pereira de Lima][link-author]

