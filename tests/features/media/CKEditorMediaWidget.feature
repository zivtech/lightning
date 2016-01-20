Feature: A CKEditor plugin for creating an embedding media assets in rich text.

  Scenario: Uploading and embedding an image
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I click "Create Image"
    And I drop an image into the dropzone
    And I check the box "Save this image to my media library"
    And I press the "Place" button
    Then I should see the image in CKEditor

  Scenario: Adding an image to the media library
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I click "Create Image"
    And I drop an image into the dropzone
    And I check the box "Save this image to my media library"
    And I press the "Place" button
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    Then I should see the image in my media library

  Scenario: Filtering the media library by media type
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I select "Tweet" from the list of media types
    Then I should only see the tweets in the media library

  Scenario: Generating a live preview of a tweet from an embed code
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I click "Create Embed"
    And I enter a tweet URL in the text area
    And I click outside the text area
    Then I should see a live preview of the tweet

  Scenario: Embedding a tweet in CKEditor
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I click "Create Embed"
    And I enter a tweet URL in the text area
    And I click outside the text area
    And I check the box "Save to my media library"
    And I press the "Place" button
    Then I should see the tweet in CKEditor

  Scenario: Adding a tweet to the media library from an embed code
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I click "Create Embed"
    And I enter a tweet URL in the text area
    And I click outside the text area
    And I check the box "Save to my media library"
    And I press the "Place" button
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    Then I should see a thumbnail of the tweet in my media library

  Scenario: Embedding a YouTube video in CKEditor
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I click "Create Embed"
    And I enter a YouTube embed code in the text area
    And I click outside the text area
    And I click "Save to my media library"
    And I press the "Place" button
    Then I should see the video in CKEditor

  Scenario: Adding a YouTube video to the media library from an embed code
    Given I am logged in as a user with the "create page content" permission
    When I go to "/admin/content"
    And I click "Add content"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    And I click "Create Embed"
    And I enter a YouTube embed code in the text area
    And I click outside the text area
    And I click "Save to my media library"
    And I click "Place"
    And I execute the "media_library" command in CKEditor "edit-body-0-value"
    Then I should see a thumbnail of the video in my media library
