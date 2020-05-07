# FizzBuzz Kata
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz “.

* [Objectives](#objectives)
* [Local setup](#local-setup)
* [Testing](#testing)
* [Contributing](#contributing)
* [License](#license)

## Objectives
FizzBuzz Kata for introducing TDD.
Try out TDD using PHPUnit for solving the FizzBuzz problem.

## Local setup
Follow the instructions to get the project up and running for local development and testing purposes.
- Install php 7.3 (7.1 EOL soon): https://php-osx.liip.ch/.
- Configure the IDE CLI Interpreter to use php 7.3.
- Install composer (https://getcomposer.org/) and confirm the installation was successful by running:
    ```
    composer --version
    ```
- Install project dependencies (min dependencies are phpunit, phpstan and roave security):
    ```
    make install
    ```
- Configure the IDE Test Framework: https://www.jetbrains.com/help/phpstorm/using-phpunit-framework.html.
- The project already provides a phpunit configuration template that will be used when running tests via the Makefile.
Add a replica of the tests run configuration in the IDE for easier development.

## Testing
For running all tests:
```
make test
```

## Contributing
[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg)](.github/CONTRIBUTING.md)

### License
[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](LICENSE.md)
