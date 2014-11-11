<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use ContaoCommunityAlliance\GithubPayload\Meta\Comment;
use ContaoCommunityAlliance\GithubPayload\Meta\Issue;
use ContaoCommunityAlliance\GithubPayload\Meta\Repository;
use ContaoCommunityAlliance\GithubPayload\Meta\User;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("none")
 */
class IssueCommentEvent extends GithubEvent
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("action")
     * @Serializer\Type("string")
     */
    protected $action;

    /**
     * @var Issue
     *
     * @Serializer\SerializedName("issue")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Issue")
     */
    protected $issue;

    /**
     * @var Comment
     *
     * @Serializer\SerializedName("comment")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Comment")
     */
    protected $comment;

    /**
     * @var Repository
     *
     * @Serializer\SerializedName("repository")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Repository")
     */
    protected $repository;

    /**
     * @var User
     *
     * @Serializer\SerializedName("sender")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $sender;

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     *
     * @return static
     */
    public function setAction($action)
    {
        $this->action = (string) $action;
        return $this;
    }

    /**
     * @return Issue
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * @param Issue $issue
     *
     * @return static
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
        return $this;
    }

    /**
     * @return Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param Comment $comment
     *
     * @return static
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return Repository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param Repository $repository
     *
     * @return static
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param User $sender
     *
     * @return static
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }
}
