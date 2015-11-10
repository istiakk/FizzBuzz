Feature: Fizzbuzz
	As a developer
	In order to showcase my development skills
	I should implement Fizzbuzz

	Scenario: Running Fizzbuzz with 2 as max should just output numbers
		When I run "php src/fizzbuzz.php 2"
		Then I should see "1 2"

	Scenario: Running Fizzbuzz without a rule parameter should default to fizz rule
		When I run "php src/fizzbuzz.php 5"
		Then I should see "1 2 fizz 4 5"

	Scenario: Running Fizzbuzz with buzz rule
		When I run "php src/fizzbuzz.php 6 buzz"
		Then I should see "1 2 3 4 buzz 6"

	Scenario Outline: Running Fizzbuzz with fizz, buzz and fizzbuzz rules
		 When I run "php src/fizzbuzz.php 15 <rules>"
		 Then I should see <output>

		Examples:
			| rules					| output													  |
			| fizz					| "1 2 fizz 4 5 fizz 7 8 fizz 10 11 fizz 13 14 fizz"		  |
			| buzz					| "1 2 3 4 buzz 6 7 8 9 buzz 11 12 13 14 buzz"				  |
			| fizzbuzz				| "1 2 3 4 5 6 7 8 9 10 11 12 13 14 fizzbuzz"				  |
			| fizz,buzz				| "1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizz"	  |
			| fizz,buzz,fizzbuzz	| "1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz" |
