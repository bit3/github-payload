<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Commit
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("id")
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("distinct")
     * @Serializer\Type("boolean")
     */
    protected $distinct;

    /**
     * @var string
     *
     * @Serializer\SerializedName("message")
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("timestamp")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    protected $timestamp;

    /**
     * @var string
     *
     * @Serializer\SerializedName("url")
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * @var Contact
     *
     * @Serializer\SerializedName("author")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Contact")
     */
    protected $author;

    /**
     * @var Contact
     *
     * @Serializer\SerializedName("committer")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Contact")
     */
    protected $committer;

    /**
     * @var string[]
     *
     * @Serializer\SerializedName("added")
     * @Serializer\Type("array<string>")
     */
    protected $added;

    /**
     * @var string[]
     *
     * @Serializer\SerializedName("removed")
     * @Serializer\Type("array<string>")
     */
    protected $removed;

    /**
     * @var string[]
     *
     * @Serializer\SerializedName("modified")
     * @Serializer\Type("array<string>")
     */
    protected $modified;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return static
     */
    public function setId($id)
    {
        $this->id = (string) $id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDistinct()
    {
        return $this->distinct;
    }

    /**
     * @param boolean $distinct
     *
     * @return static
     */
    public function setDistinct($distinct)
    {
        $this->distinct = (bool) $distinct;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return static
     */
    public function setMessage($message)
    {
        $this->message = (string) $message;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param \DateTime $timestamp
     *
     * @return static
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

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
     * @return Contact
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Contact $author
     *
     * @return static
     */
    public function setAuthor(Contact $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getCommitter()
    {
        return $this->committer;
    }

    /**
     * @param Contact $committer
     *
     * @return static
     */
    public function setCommitter(Contact $committer)
    {
        $this->committer = $committer;
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @param \string[] $added
     *
     * @return static
     */
    public function setAdded(array $added)
    {
        $this->added = array_map('strval', $added);
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \string[] $modified
     *
     * @return static
     */
    public function setModified(array $modified)
    {
        $this->modified = array_map('strval', $modified);
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * @param \string[] $removed
     *
     * @return static
     */
    public function setRemoved(array $removed)
    {
        $this->removed = array_map('strval', $removed);
        return $this;
    }
}
