<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use ContaoCommunityAlliance\GithubPayload\Meta\Commit;
use ContaoCommunityAlliance\GithubPayload\Meta\Repository;
use ContaoCommunityAlliance\GithubPayload\Meta\User;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("none")
 */
class PushEvent extends GithubEvent
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("ref")
     * @Serializer\Type("string")
     */
    protected $ref;

    /**
     * @var string
     *
     * @Serializer\SerializedName("after")
     * @Serializer\Type("string")
     */
    protected $after;

    /**
     * @var string
     *
     * @Serializer\SerializedName("before")
     * @Serializer\Type("string")
     */
    protected $before;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("created")
     * @Serializer\Type("boolean")
     */
    protected $created;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("deleted")
     * @Serializer\Type("boolean")
     */
    protected $deleted;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("forced")
     * @Serializer\Type("boolean")
     */
    protected $forced;

    /**
     * @var string
     *
     * @Serializer\SerializedName("compare")
     * @Serializer\Type("string")
     */
    protected $compare;

    /**
     * @var Commit[]
     *
     * @Serializer\SerializedName("commits")
     * @Serializer\Type("array<ContaoCommunityAlliance\GithubPayload\Meta\Commit>")
     */
    protected $commits;

    /**
     * @var Commit
     *
     * @Serializer\SerializedName("head_commit")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Commit")
     */
    protected $headCommit;

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
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     *
     * @return static
     */
    public function setRef($ref)
    {
        $this->ref = (string) $ref;
        return $this;
    }

    /**
     * @return string
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * @param string $after
     *
     * @return static
     */
    public function setAfter($after)
    {
        $this->after = (string) $after;
        return $this;
    }

    /**
     * @return string
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * @param string $before
     *
     * @return static
     */
    public function setBefore($before)
    {
        $this->before = (string) $before;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCreated()
    {
        return $this->created;
    }

    /**
     * @param boolean $created
     *
     * @return static
     */
    public function setCreated($created)
    {
        $this->created = (bool) $created;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted
     *
     * @return static
     */
    public function setDeleted($deleted)
    {
        $this->deleted = (bool) $deleted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isForced()
    {
        return $this->forced;
    }

    /**
     * @param boolean $forced
     *
     * @return static
     */
    public function setForced($forced)
    {
        $this->forced = (bool) $forced;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompare()
    {
        return $this->compare;
    }

    /**
     * @param string $compare
     *
     * @return static
     */
    public function setCompare($compare)
    {
        $this->compare = (string) $compare;
        return $this;
    }

    /**
     * @return Commit[]
     */
    public function getCommits()
    {
        return $this->commits;
    }

    /**
     * @param Commit[] $commits
     *
     * @return static
     */
    public function setCommits(array $commits)
    {
        $this->commits = $commits;
        return $this;
    }

    /**
     * @return Commit
     */
    public function getHeadCommit()
    {
        return $this->headCommit;
    }

    /**
     * @param Commit $headCommit
     *
     * @return static
     */
    public function setHeadCommit(Commit $headCommit)
    {
        $this->headCommit = $headCommit;
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
    public function setRepository(Repository $repository)
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
    public function setSender(User $sender)
    {
        $this->sender = $sender;
        return $this;
    }
}
