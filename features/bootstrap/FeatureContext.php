<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
	private $lastFizzbuzzOutput = '';

	private $rules = null;

	/**
	 * Initializes context.
	 *
	 * Every scenario gets its own context instance.
	 * You can also pass arbitrary arguments to the
	 * context constructor through behat.yml.
	 */
	public function __construct()
	{
	}

	/**
	 * @When I run :runCommand
	 */
	public function iRunFizzbuzzWithAsMax($runCommand)
	{
		$output = [];
		exec($runCommand, $output);
		$this->lastFizzbuzzOutput = current($output);
	}

	/**
	 * @Then I should see :expectedOutput
	 */
	public function iShouldSee($expectedOutput)
	{
		if ($expectedOutput != $this->lastFizzbuzzOutput) {
			throw new \Exception("Fizzbuzz output: '{$this->lastFizzbuzzOutput}' was not equal to expected output: '$expectedOutput'");
		}
	}
}
