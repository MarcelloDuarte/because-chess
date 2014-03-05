Feature: Player can issue a challenge
  In order to find a suitable opponent
  As an online chess player
  I want to be able to issue a challenge

  Scenario: Start game if there is a suitable opponent online
    Given I am a player rated 1600
    And I accept a threshold of 200 points
    And there is one player online named "kingscrusher" rated 1800
    And "kingscrusher" has issued a challenge himself
    And there are no other players online
    When I issue a new challenge
    Then a new match should start between me and "kingscrusher"

  Scenario: Don't start a game if there are no suitable opponents online
    Given I am a player rated 1600
    And I accept a threshold of 200 points
    And there is one player online named "checkfright" rated 800
    When I issue a new challenge
    Then I should be told there are no suitable opponents online
    And a new match should not start