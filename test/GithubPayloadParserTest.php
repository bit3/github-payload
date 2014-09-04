<?php

namespace ContaoCommunityAlliance\GithubPayload\Test;

use ContaoCommunityAlliance\GithubPayload\Event\AbstractEvent;
use ContaoCommunityAlliance\GithubPayload\GithubPayloadParser;

class GithubPayloadParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GithubPayloadParser
     */
    protected $parser;

    public function setUp()
    {
        $this->parser = new GithubPayloadParser();
    }

    public function tearDown()
    {
        unset($this->parser);
        gc_collect_cycles();
    }

    public function testParseCommitCommentEvent()
    {
        $this->runParse('commit_comment');
    }

    public function testParseCreateEvent()
    {
        $this->runParse('create');
    }

    public function testParseDeleteEvent()
    {
        $this->runParse('delete');
    }

    public function testParseDeploymentEvent()
    {
        $this->runParse('deployment');
    }

    public function testParseDeploymentStatusEvent()
    {
        $this->runParse('deployment_status');
    }

    public function testParseForkEvent()
    {
        $this->runParse('fork');
    }

    public function testParseGollumEvent()
    {
        $this->runParse('gollum');
    }

    public function testParseIssueCommentEvent()
    {
        $this->runParse('issue_comment');
    }

    public function testParseIssuesEvent()
    {
        $this->runParse('issues');
    }

    public function testParseMemberEvent()
    {
        $this->runParse('member');
    }

    public function testParsePageBuildEvent()
    {
        $this->runParse('page_build');
    }

    public function testParsePublicEvent()
    {
        $this->runParse('public');
    }

    public function testParsePullRequestEvent()
    {
        $this->runParse('pull_request');
    }

    public function testParsePullRequestReviewCommentEvent()
    {
        $this->runParse('pull_request_review_comment');
    }

    public function testParsePushEvent()
    {
        $this->runParse('push');
    }

    public function testParseReleaseEvent()
    {
        $this->runParse('release');
    }

    public function testParseStatusEvent()
    {
        $this->runParse('status');
    }

    public function testParseTeamAddEvent()
    {
        $this->runParse('team_add');
    }

    public function testParseWatchEvent()
    {
        $this->runParse('watch');
    }

    public function runParse($eventName)
    {
        $this->assertTrue(class_exists('JMS\Serializer\Annotation\Discriminator'));

        $payload = file_get_contents(
            __DIR__ . DIRECTORY_SEPARATOR . 'Fixtures' . DIRECTORY_SEPARATOR . $eventName . '.json'
        );

        $event = $this->parser->parse($eventName, $payload);

        $this->assertNotNull($event);
        $this->assertTrue($event instanceof AbstractEvent);
    }
}
