Feature: Creating a landing page and editing it using the in-place editor

  Scenario: Placing a block on a landing page
    Given I am logged in as a user with the "administrator" role
    When I go to "/admin/structure/landing-page"
    And I enter "Foobaz" for "Title"
    And I enter "/foobaz" for "Path"
    And I select "Two column" from "Layout"
    And I press "Create"
    And I click "Manage Content"
    And I click "System"
    And I add the "Breadcrumbs" block
    And I select "Left side" from "Region"
    And I press "Place"
    Then I should see the "Breadcrumbs" block in the "left" region

  Scenario: Dragging a block from one region to another on a landing page
    Given I am logged in as a user with the "administrator" role
    When I go to "/admin/structure/landing-page"
    And I enter "Foobaz" for "Title"
    And I enter "/foobaz" for "Path"
    And I select "Two column" from "Layout"
    And I press "Create"
    And I click "Manage Content"
    And I click "System"
    And I add the "Breadcrumbs" block
    And I select "Left side" from "Region"
    And I press "Place"
    And I edit the page
    And I drag the "Breadcrumbs" block into the "right" region
    And I save the page
    Then I should see the "Breadcrumbs" block in the "right" region

  Scenario: Deleting a block from a landing page
    Given I am logged in as a user with the "administrator" role
    When I go to "/admin/structure/landing-page"
    And I enter "Foobaz" for "Title"
    And I enter "/foobaz" for "Path"
    And I select "Two column" from "Layout"
    And I press "Create"
    And I click "Manage Content"
    And I click "System"
    And I add the "Breadcrumbs" block
    And I select "Left side" from "Region"
    And I press "Place"
    And I edit the page
    And I press the delete button for the "Breadcrumbs" block
    And I save the page
    Then the "left" region should be empty

  Scenario: Changing the layout of a landing page
    Given I am logged in as a user with the "administrator" role
    When I go to "/admin/structure/landing-page"
    And I enter "Foobaz" for "Title"
    And I enter "/foobaz" for "Path"
    And I select "One column" from "Layout"
    And I press "Create"
    And I click "Change Layout"
    And I click "Columns: 2"
    And I click the two-column icon
    And I press the edit button
    Then I should see "Region: Left"
    And I should see "Region: Right"
