Composer PSR-4 Example
======================

When attempting to learn how to use namespaces in PHP combined with Composer's
PSR-4 autoloading spec, I couldn't find a solid working example. I understood
the theory of autoloading, I understood why Namespaces were good - I just wanted
a working template so I could start coding.

Well, I couldn't find one, so I'm making one.

Usage
-----

Install the dependencies (currently only phpunit)

    $ php composer.phar install

Run the unit test to verify everything works correctly

    ~$ ./vendor/bin/phpunit tests/

You sould see the following output

    PHPUnit 4.8.16 by Sebastian Bergmann and contributors.

    .

    Time: 41 ms, Memory: 3.75Mb

    OK (1 test, 1 assertion)


How to use namespaces with Composer
-----------------------------------

Suppose you want to create a namespace named `MyNameSpace`

1. Map `MyNameSpace` to a base directory via the composer.json file
2. Within the base directory for the namespace, create a php file named `MyClass.php`
3. Inside `MyClass.php`, declare the namespace `MyNameSpace`
4. Inside `MyClass.php`, ensure the class `MyClass` has been defined, and that
   it matches the php file name exactly
5. Files that wish to use `MyClass` can now access it via `use
   MyNameSpace\MyClass`.
