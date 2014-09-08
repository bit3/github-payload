<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Hook
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("url")
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * @var string
     *
     * @Serializer\SerializedName("test_url")
     * @Serializer\Type("string")
     */
    protected $testUrl;

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
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var boolean
     *
     * @Serializer\SerializedName("active")
     * @Serializer\Type("boolean")
     */
    protected $active;

    /**
     * @var array
     *
     * @Serializer\SerializedName("events")
     * @Serializer\Type("array<string>")
     */
    protected $events;

    /**
     * @var HookConfig
     *
     * @Serializer\SerializedName("config")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\HookConfig")
     */
    protected $config;

    /**
     * @var HookResponse
     *
     * @Serializer\SerializedName("last_response")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\HookResponse")
     */
    protected $last_response;

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
     * @return string
     */
    public function getTestUrl()
    {
        return $this->testUrl;
    }

    /**
     * @param string $testUrl
     *
     * @return static
     */
    public function setTestUrl($testUrl)
    {
        $this->testUrl = (string) $testUrl;
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
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return static
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param array $events
     *
     * @return static
     */
    public function setEvents(array $events)
    {
        $this->events = $events;
        return $this;
    }

    /**
     * @return HookConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param HookConfig $config
     *
     * @return static
     */
    public function setConfig(HookConfig $config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return HookResponse
     */
    public function getLastResponse()
    {
        return $this->last_response;
    }

    /**
     * @param HookResponse $last_response
     *
     * @return static
     */
    public function setLastResponse(HookResponse $last_response)
    {
        $this->last_response = $last_response;
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
}
