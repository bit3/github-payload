<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Issue
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
     * @Serializer\SerializedName("labels_url")
     * @Serializer\Type("string")
     */
    protected $labelsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("comments_url")
     * @Serializer\Type("string")
     */
    protected $commentsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("events_url")
     * @Serializer\Type("string")
     */
    protected $eventsUrl;

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
     * @var int
     *
     * @Serializer\SerializedName("number")
     * @Serializer\Type("integer")
     */
    protected $number;

    /**
     * @var string
     *
     * @Serializer\SerializedName("title")
     * @Serializer\Type("string")
     */
    protected $title;

    /**
     * @var User
     *
     * @Serializer\SerializedName("user")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $user;

    /**
     * @var Label[]
     *
     * @Serializer\SerializedName("labels")
     * @Serializer\Type("array<ContaoCommunityAlliance\GithubPayload\Meta\Label>")
     */
    protected $labels;

    /**
     * @var string
     *
     * @Serializer\SerializedName("state")
     * @Serializer\Type("string")
     */
    protected $state;

    /**
     * @var User|null
     *
     * @Serializer\SerializedName("assignee")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $assignee;

    /**
     * @var string
     *
     * @Serializer\SerializedName("milestone")
     * @Serializer\Type("string")
     */
    protected $milestone;

    /**
     * @var int
     *
     * @Serializer\SerializedName("comments")
     * @Serializer\Type("integer")
     */
    protected $comments;

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
     * @var \DateTime|null
     *
     * @Serializer\SerializedName("closed_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z', 'UTC'>")
     */
    protected $closedAt;

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
    public function getLabelsUrl()
    {
        return $this->labelsUrl;
    }

    /**
     * @param string $labelsUrl
     *
     * @return static
     */
    public function setLabelsUrl($labelsUrl)
    {
        $this->labelsUrl = (string) $labelsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommentsUrl()
    {
        return $this->commentsUrl;
    }

    /**
     * @param string $commentsUrl
     *
     * @return static
     */
    public function setCommentsUrl($commentsUrl)
    {
        $this->commentsUrl = (string) $commentsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getEventsUrl()
    {
        return $this->eventsUrl;
    }

    /**
     * @param string $eventsUrl
     *
     * @return static
     */
    public function setEventsUrl($eventsUrl)
    {
        $this->eventsUrl = (string) $eventsUrl;
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
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function setNumber($number)
    {
        $this->number = (int) $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return static
     */
    public function setTitle($title)
    {
        $this->title = (string) $title;
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
     * @return Label[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param Label[] $labels
     *
     * @return static
     */
    public function setLabels(array $labels)
    {
        $this->labels = $labels;
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
     * @return User|null
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * @param User|null $assignee
     *
     * @return static
     */
    public function setAssignee(User $assignee = null)
    {
        $this->assignee = $assignee;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * @param string $milestone
     *
     * @return static
     */
    public function setMilestone($milestone)
    {
        $this->milestone = (string) $milestone;
        return $this;
    }

    /**
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param int $comments
     *
     * @return static
     */
    public function setComments($comments)
    {
        $this->comments = (int) $comments;
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
     * @param \DateTime $updateAt
     *
     * @return static
     */
    public function setUpdatedAt(\DateTime $updateAt)
    {
        $this->updatedAt = $updateAt;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * @param \DateTime|null $closedAt
     *
     * @return static
     */
    public function setClosedAt(\DateTime $closedAt = null)
    {
        $this->closedAt = $closedAt;
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
