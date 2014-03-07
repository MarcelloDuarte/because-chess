<?php

use Behat\Symfony2Extension\Context\KernelAwareInterface;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
use Behat\Behat\Exception\PendingException;
use Symfony\Component\HttpKernel\KernelInterface;

class PlayerContext extends PageObjectContext
    implements KernelAwareInterface
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    /**
     * @Given /^I am a player rated (\d+)$/
     */
    public function iAmAPlayerRated($rating)
    {
        /* @var PlayOnlinePage $page */
        $this->page = $this->getPage('Play Online');
        $this->page->open();
        $this->page->fillRating($rating);
    }

    /**
     * @Given /^I accept a threshold of (\d+) points$/
     */
    public function iAcceptAThresholdOfPoints($threshold)
    {
        $this->page->fillThreshold($threshold);
    }

    /**
     * @Given /^there is one player online named "([^"]*)" rated (\d+)$/
     */
    public function thereIsOnePlayerOnlineNamedRated($name, $rating)
    {
        $pool = $this->kernel->getContainer()->get('player_pool');
        $pool->add(new Player($name, $rating));
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

    /**
     * Sets Kernel instance.
     *
     * @param KernelInterface $kernel HttpKernel instance
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }
}