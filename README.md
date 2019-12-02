# marcusirgens/bref-psr7
Adds [PSR-7] support to [Bref]'s function handler.

## Installation
### Get the package
Install the library using [composer]

```shell script
composer require marcusirgens/bref-psr7
```
### Set up Bref and configure the handler
[Set up Bref as you would normally do](https://bref.sh/docs/installation.html). 
However, instead of doing `bref init`, you should copy the contents of 
`resources/template/psr7` to your project root.

```shell script
$ # You can execute the following command from your project root,
$ # as long as you are using default composer settings.
$ cp vendor/marcusirgens/bref-psr7/resources/template/psr7/* .
```

This will configure your project for a Lambda using the Bref _function_ runtime,
with a handler that converts the incoming request to a 
[`ServerRequestInterface`](https://www.php-fig.org/psr/psr-7/#321-psrhttpmessageserverrequestinterface)
object.

## Acknowledgements
- A substantial part of the test suite comes from [Bref]'s 0.2-0.3 versions, 
  which is copyrighted to [Matthieu Napoli] and licensed under the MIT license. 

## License
The library is released under the [MIT] license.

[composer]: https://getcomposer.org/
[PSR-7]: https://www.php-fig.org/psr/psr-7/
[MIT]: https://spdx.org/licenses/MIT.html
[Bref]: https://bref.sh
[Matthieu Napoli]: https://mnapoli.fr/
