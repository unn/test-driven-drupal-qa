Feature: Home Page
  The home page display x, y, and z.

  Background:
    Given I am logged in as a user with the "authenticated user" role
    And I am on the homepage

  Scenario: Authenticated users are welcomed
    Then I should see text "Welcome!"
