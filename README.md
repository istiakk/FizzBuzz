FizzBuzz code test
==================
This is the FizzBuzz code test answer. 
The task is to write a command line program that outputs either numbers or fizz, buzz, fizzbuzz given certain inputs. 
The problem
===========
The program should work like this:

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

