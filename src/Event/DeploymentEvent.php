<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use ContaoCommunityAlliance\GithubPayload\Meta\Repository;
use ContaoCommunityAlliance\GithubPayload\Meta\User;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("none")
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class DeploymentEvent extends GithubEvent
{
    /**
     * @var int
     *
     * @Serializer\SerializedName("id")
     * @Serializer\Type("integer")
     */
    protected $id;

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
     * @Serializer\SerializedName("ref")
     * @Serializer\Type("string")
     */
    protected $ref;

    /**
     * @var string
     *
     * @Serializer\SerializedName("task")
     * @Serializer\Type("string")
     */
    protected $task;

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
     * @Serializer\SerializedName("environment")
     * @Serializer\Type("string")
     */
    protected $environment;

    /**
     * @var array
     *
     * @Serializer\SerializedName("payload")
     * @Serializer\Type("array")
     */
    protected $payload;

    /**
     * @var string
     *
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    protected $description;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return static
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

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
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param string $task
     *
     * @return static
     */
    public function setTask($task)
    {
        $this->task = (string) $task;
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
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     *
     * @return static
     */
    public function setEnvironment($environment)
    {
        $this->environment = (string) $environment;
        return $this;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param array $payload
     *
     * @return static
     */
    public function setPayload(array $payload)
    {
        $this->payload = $payload;
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
