<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Build
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
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    protected $status;

    /**
     * @var Error
     *
     * @Serializer\SerializedName("error")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Error")
     */
    protected $error;

    /**
     * @var User
     *
     * @Serializer\SerializedName("error")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $pusher;

    /**
     * @var string
     *
     * @Serializer\SerializedName("commit")
     * @Serializer\Type("string")
     */
    protected $commit;

    /**
     * @var int
     *
     * @Serializer\SerializedName("duration")
     * @Serializer\Type("integer")
     */
    protected $duration;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return static
     */
    public function setStatus($status)
    {
        $this->status = (string) $status;
        return $this;
    }

    /**
     * @return Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param Error $error
     *
     * @return static
     */
    public function setError(Error $error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return User
     */
    public function getPusher()
    {
        return $this->pusher;
    }

    /**
     * @param User $pusher
     *
     * @return static
     */
    public function setPusher($pusher)
    {
        $this->pusher = $pusher;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param string $commit
     *
     * @return static
     */
    public function setCommit($commit)
    {
        $this->commit = (string) $commit;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return static
     */
    public function setDuration($duration)
    {
        $this->duration = (int) $duration;
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
