<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Exception\PendingException;

class PlayerContext extends MinkContext
{
    /**
     * @Given /^I am a player rated (\d+)$/
     */
    public function iAmAPlayerRated($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I accept a threshold of (\d+) points$/
     */
    public function iAcceptAThresholdOfPoints($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^there is one player online named "([^"]*)" rated (\d+)$/
     */
    public function thereIsOnePlayerOnlineNamedRated($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given /^"([^"]*)" has issued a challenge himself$/
     */
    public function hasIssuedAChallengeHimself($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^there are no other players online$/
     */
    public function thereAreNoOtherPlayersOnline()
    {
        throw new PendingException();
    }

    /**
     * @When /^I issue a new challenge$/
     */
    public function iIssueANewChallenge()
    {
        throw new PendingException();
    }

    /**
     * @Then /^a new match should start between me and "([^"]*)"$/
     */
    public function aNewMatchShouldStartBetweenMeAnd($arg1)
    {
        throw new PendingException();
    }
}