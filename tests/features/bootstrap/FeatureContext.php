<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends Drupal\DrupalExtension\Context\DrupalContext {
  /**
   * Initializes context.
   * Every scenario gets it's own context object.
   *
   * @param array $parameters context parameters (set them up through behat.yml)
   */
  public function __construct(array $parameters) {
    // Initialize your context here
  }

  /** @When /^I run "([^"]*)"$/ */
  public function iRun($command) {
    exec($command, $output);
    $this->output = trim(implode("\n", $output));
  }

  /** @Then /^I should see:$/ */
  public function iShouldSee(PyStringNode $string) {
    if ((string) $string !== $this->output) {
      throw new Exception(
        "Actual output is:\n" . $this->output
      );
    }
  }
}
