Feature: Scheduling changes to be applied at a later time

  Scenario: Scheduling multiple entities to be updated at once
    Given I am logged in as a user with the "administer content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I enter "Foobaz" for "Title"
    And I press "Save as Draft"
    And I go to "/admin/content"
    And I click "Scheduled Updates"
    And I enter "Foobar (1)" for "entity_ids[0][target_id]"
    And I enter "2016-01-01" for "update_timestamp[0][value][date]"
    And I enter "01:00" for "update_timestamp[0][value][time]"
    And I select "published" from "Moderation state"
    And I press "Save"
    And I go to "/admin/config"
    And I click "Scheduled Updates Overview"
    And I click "Run Scheduled Updates"
    And I press "Run Updates"
    Then I should see "1 update(s) were performed."
    And node 1 should be in the "published" state

  Scenario: Scheduling a single entity to be updated
    Given I am logged in as a user with the "administer content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I enter "Foobaz" for "Title"
    And I press "Add new entity"
    And I enter "2016-01-01" for "update_timestamp[0][value][date]"
    And I enter "01:00" for "update_timestamp[0][value][time]"
    And I select "published" from "Moderation state"
    And I press "Save as Draft"
    And I go to "/admin/config"
    And I click "Scheduled Updates Overview"
    And I click "Run Scheduled Updates"
    And I press "Run Updates"
    Then I should see "1 update(s) were performed."
    And node 1 should be in the "published" state
