<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Comment
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
     * @Serializer\SerializedName("html_url")
     * @Serializer\Type("string")
     */
    protected $htmlUrl;

    /**
     * @var int
     *
     * @Serializer\SerializedName("id")
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var User
     *
     * @Serializer\SerializedName("user")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $user;

    /**
     * @var string
     *
     * @Serializer\SerializedName("position")
     * @Serializer\Type("string")
     */
    protected $position;

    /**
     * @var string
     *
     * @Serializer\SerializedName("line")
     * @Serializer\Type("string")
     */
    protected $line;

    /**
     * @var string
     *
     * @Serializer\SerializedName("path")
     * @Serializer\Type("string")
     */
    protected $path;

    /**
     * @var string
     *
     * @Serializer\SerializedName("commit_id")
     * @Serializer\Type("string")
     */
    protected $commitId;

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
     * @Serializer\SerializedName("body")
     * @Serializer\Type("string")
     */
    protected $body;

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
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * @param string $htmlUrl
     *
     * @return static
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->htmlUrl = (string) $htmlUrl;
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
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return static
     */
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return static
     */
    public function setPosition($position)
    {
        $this->position = (string) $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param string $line
     *
     * @return static
     */
    public function setLine($line)
    {
        $this->line = (string) $line;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return static
     */
    public function setPath($path)
    {
        $this->path = (string) $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommitId()
    {
        return $this->commitId;
    }

    /**
     * @param string $commitId
     *
     * @return static
     */
    public function setCommitId($commitId)
    {
        $this->commitId = (string) $commitId;
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
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return static
     */
    public function setBody($body)
    {
        $this->body = (string) $body;
        return $this;
    }
}
