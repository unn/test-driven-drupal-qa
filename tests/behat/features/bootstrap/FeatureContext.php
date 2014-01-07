<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Drupal\DrupalExtension\Context\DrupalContext;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Drupal\Component\Utility\Random;
use Behat\Behat\Context\Step\Given;

class FeatureContext extends DrupalContext {

  /**
   * @Given /^for "(?P<field>[^"]*)" I enter random string "(?P<length>[^"]*)"$/
   * @Given /^I enter random string "(?P<length>[^"]*)" for "(?P<field>[^"]*)"$/
   */
  public function assertEnterRandomStringField($field, $length) {
    $value = Random::string($length);
    // Use the Mink Extension step definition.
    return new Given("I fill in \"$field\" with \"$value\"");
  }

  /**
   * @Given /^for "(?P<field>[^"]*)" I enter random name "(?P<length>[^"]*)"$/
   * @Given /^I enter random name "(?P<length>[^"]*)" for "(?P<field>[^"]*)"$/
   */
  public function assertEnterRandomNameField($field, $length) {
    $value = Random::name($length);
    // Use the Mink Extension step definition.
    return new Given("I fill in \"$field\" with \"$value\"");
  }

}
