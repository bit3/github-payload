<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Deployment
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("url")
     * @Serializer\Type("string")
     */
    protected $url;

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
     * @var array
     *
     * @Serializer\SerializedName("payload")
     * @Serializer\Type("array")
     */
    protected $payload;

    /**
     * @var string
     *
     * @Serializer\SerializedName("environment")
     * @Serializer\Type("string")
     */
    protected $environment;

    /**
     * @var string
     *
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var User
     *
     * @Serializer\SerializedName("creator")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $creator;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("created_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z', 'UTC'>")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("updated_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z', 'UTC'>")
     */
    protected $updatedAt;

    /**
     * @var string
     *
     * @Serializer\SerializedName("statuses_url")
     * @Serializer\Type("string")
     */
    protected $statusesUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("repository_url")
     * @Serializer\Type("string")
     */
    protected $repositoryUrl;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return static
     */
    public function setUrl($url)
    {
        $this->url = (string) $url;
        return $this;
    }

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
     * @return User
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param User $creator
     *
     * @return static
     */
    public function setCreator(User $creator)
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return static
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return static
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusesUrl()
    {
        return $this->statusesUrl;
    }

    /**
     * @param string $statusesUrl
     *
     * @return static
     */
    public function setStatusesUrl($statusesUrl)
    {
        $this->statusesUrl = (string) $statusesUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepositoryUrl()
    {
        return $this->repositoryUrl;
    }

    /**
     * @param string $repositoryUrl
     *
     * @return static
     */
    public function setRepositoryUrl($repositoryUrl)
    {
        $this->repositoryUrl = (string) $repositoryUrl;
        return $this;
    }
}
