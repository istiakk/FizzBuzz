FizzBuzz code test
==================
This is the FizzBuzz code test. The task is to write a command line program that outputs either numbers or fizz, buzz, fizzbuzz given certain inputs. Please read through these instructions carefully before starting.

What we look at
===============
* Focus on object oriented design, for example how the code follows [SOLID](http://en.wikipedia.org/wiki/SOLID_(object-oriented_design)) and [DRY](http://en.wikipedia.org/wiki/Don%27t_repeat_yourself) principles
* General code layout
* Extensibility of the solution

The problem
===========
You're asked to implement a command line program called fizzbuzz. When you are done, your program should work like this:

		$ php src/fizzbuzz.php 15 fizz,buzz,fizzbuzz
		1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz

fizzbuzz should count up to the number provided by the first parameter (15 in the example above) and depending on the set of rules provided in the second parameter, it replaces some of the numbers with words.

The rules for when to output fizz, buzz, or fizzbuzz are:
* If the number is a multiple of 3, output fizz instead of the number
* If the number is a multiple of 5, output buzz instead of the number
* If the number is a multiple of 3 and 5, output fizzbuzz instead of the number

fizzbuzz should only cater for the rules supplied as the second parameter, for example

	$ php src/fizzbuzz.php 4 fizz
	1 2 fizz 4

	$ php src/fizzbuzz.php 6 buzz
	1 2 3 4 buzz 6

The expected behavior is described in features/fizzbuzz.feature, read through it for a more detailed description on the expected behavior.

The feature can also be automatically verified using the BDD tool [Behat](http://docs.behat.org/en/v3.0/) which is present already in this repository. You can run the feature using behat like this on *nix:

	$ php bin/behat features/fizzbuzz.feature

On windows you need to provide the full path:

	$ php vendor\behat\behat\bin\behat features\fizzbuzz.feature

If you get a warning about max nesting level reached you need to add **xdebug.max_nesting_level = 200** to your php.ini.

This is a convenient way of making sure that you cover the different cases, but you don't have to use behat if you don't want to.

Implementation
==============
* Even though this repository has some php code ready, you are free to use any programming language you like as long as the command line program takes the same parameters.
* The solution should probably contain at least a couple of classes
* You should not use any other application framework with the exception of potential test frameworks that you'd like to use (such as a unit testing framework).

