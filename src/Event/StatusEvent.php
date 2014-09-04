<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use ContaoCommunityAlliance\GithubPayload\Meta\Branch;
use ContaoCommunityAlliance\GithubPayload\Meta\Repository;
use ContaoCommunityAlliance\GithubPayload\Meta\StatusCommit;
use ContaoCommunityAlliance\GithubPayload\Meta\User;
use JMS\Serializer\Annotation as Serializer;

class StatusEvent extends AbstractEvent
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("sha")
     * @Serializer\Type("string")
     */
    protected $sha;

    /**
     * @var string
     *
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     *
     * @Serializer\SerializedName("target_url")
     * @Serializer\Type("string")
     */
    protected $targetUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("context")
     * @Serializer\Type("string")
     */
    protected $context;

    /**
     * @var string
     *
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var string
     *
     * @Serializer\SerializedName("state")
     * @Serializer\Type("string")
     */
    protected $state;

    /**
     * @var Branch[]
     *
     * @Serializer\SerializedName("branches")
     * @Serializer\Type("array<ContaoCommunityAlliance\GithubPayload\Meta\Branch>")
     */
    protected $branches;

    /**
     * @var StatusCommit
     *
     * @Serializer\SerializedName("commit")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\StatusCommit")
     */
    protected $commit;

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
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * @param string $sha
     *
     * @return static
     */
    public function setSha($sha)
    {
        $this->sha = (string) $sha;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return static
     */
    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     *
     * @return static
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = (string) $targetUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $context
     *
     * @return static
     */
    public function setContext($context)
    {
        $this->context = (string) $context;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return static
     */
    public function setDescription($description)
    {
        $this->description = (string) $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return static
     */
    public function setState($state)
    {
        $this->state = (string) $state;
        return $this;
    }

    /**
     * @return Branch[]
     */
    public function getBranches()
    {
        return $this->branches;
    }

    /**
     * @param Branch[] $branches
     *
     * @return static
     */
    public function setBranches(array $branches)
    {
        $this->branches = $branches;
        return $this;
    }

    /**
     * @return StatusCommit
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param StatusCommit $commit
     *
     * @return static
     */
    public function setCommit(StatusCommit $commit)
    {
        $this->commit = $commit;
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
