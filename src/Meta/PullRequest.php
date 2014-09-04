<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class PullRequest
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
     * @Serializer\SerializedName("html_url")
     * @Serializer\Type("string")
     */
    protected $htmlUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("diff_url")
     * @Serializer\Type("string")
     */
    protected $diffUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("patch_url")
     * @Serializer\Type("string")
     */
    protected $patchUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("issue_url")
     * @Serializer\Type("string")
     */
    protected $issueUrl;

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
     * @Serializer\SerializedName("state")
     * @Serializer\Type("string")
     */
    protected $state;

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
     * @var string
     *
     * @Serializer\SerializedName("body")
     * @Serializer\Type("string")
     */
    protected $body;

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
     * @var \DateTime
     *
     * @Serializer\SerializedName("closed_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z', 'UTC'>")
     */
    protected $closedAt;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("merged_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z', 'UTC'>")
     */
    protected $mergedAt;

    /**
     * @var string
     *
     * @Serializer\SerializedName("merge_commit_sha")
     * @Serializer\Type("string")
     */
    protected $mergeCommitSha;

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
     * @var string
     *
     * @Serializer\SerializedName("commits_url")
     * @Serializer\Type("string")
     */
    protected $commitsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("review_comments_url")
     * @Serializer\Type("string")
     */
    protected $reviewCommentsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("review_comment_url")
     * @Serializer\Type("string")
     */
    protected $reviewCommentUrl;

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
     * @Serializer\SerializedName("statuses_url")
     * @Serializer\Type("string")
     */
    protected $statusesUrl;

    /**
     * @var Ref
     *
     * @Serializer\SerializedName("head")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Ref")
     */
    protected $head;

    /**
     * @var Ref
     *
     * @Serializer\SerializedName("base")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Ref")
     */
    protected $base;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("merged")
     * @Serializer\Type("boolean")
     */
    protected $merged;

    /**
     * @var bool|null
     *
     * @Serializer\SerializedName("mergeable")
     * @Serializer\Type("boolean")
     */
    protected $mergeable;

    /**
     * @var string
     *
     * @Serializer\SerializedName("mergeable_state")
     * @Serializer\Type("string")
     */
    protected $mergeableState;

    /**
     * @var User|null
     *
     * @Serializer\SerializedName("merged_by")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $mergedBy;

    /**
     * @var int
     *
     * @Serializer\SerializedName("comments")
     * @Serializer\Type("integer")
     */
    protected $comments;

    /**
     * @var int
     *
     * @Serializer\SerializedName("review_comments")
     * @Serializer\Type("integer")
     */
    protected $reviewComments;

    /**
     * @var int
     *
     * @Serializer\SerializedName("commits")
     * @Serializer\Type("integer")
     */
    protected $commits;

    /**
     * @var int
     *
     * @Serializer\SerializedName("additions")
     * @Serializer\Type("integer")
     */
    protected $additions;

    /**
     * @var int
     *
     * @Serializer\SerializedName("deletions")
     * @Serializer\Type("integer")
     */
    protected $deletions;

    /**
     * @var int
     *
     * @Serializer\SerializedName("changed_files")
     * @Serializer\Type("integer")
     */
    protected $changedFiles;

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
     * @return string
     */
    public function getDiffUrl()
    {
        return $this->diffUrl;
    }

    /**
     * @param string $diffUrl
     *
     * @return static
     */
    public function setDiffUrl($diffUrl)
    {
        $this->diffUrl = (string) $diffUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPatchUrl()
    {
        return $this->patchUrl;
    }

    /**
     * @param string $patchUrl
     *
     * @return static
     */
    public function setPatchUrl($patchUrl)
    {
        $this->patchUrl = (string) $patchUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssueUrl()
    {
        return $this->issueUrl;
    }

    /**
     * @param string $issueUrl
     *
     * @return static
     */
    public function setIssueUrl($issueUrl)
    {
        $this->issueUrl = (string) $issueUrl;
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
     * @return \DateTime
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * @param \DateTime $closedAt
     *
     * @return static
     */
    public function setClosedAt(\DateTime $closedAt = null)
    {
        $this->closedAt = $closedAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMergedAt()
    {
        return $this->mergedAt;
    }

    /**
     * @param \DateTime $mergedAt
     *
     * @return static
     */
    public function setMergedAt(\DateTime $mergedAt = null)
    {
        $this->mergedAt = $mergedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getMergeCommitSha()
    {
        return $this->mergeCommitSha;
    }

    /**
     * @param string $mergeCommitSha
     *
     * @return static
     */
    public function setMergeCommitSha($mergeCommitSha)
    {
        $this->mergeCommitSha = (string) $mergeCommitSha;
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
     * @return string
     */
    public function getCommitsUrl()
    {
        return $this->commitsUrl;
    }

    /**
     * @param string $commitsUrl
     *
     * @return static
     */
    public function setCommitsUrl($commitsUrl)
    {
        $this->commitsUrl = (string) $commitsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getReviewCommentsUrl()
    {
        return $this->reviewCommentsUrl;
    }

    /**
     * @param string $reviewCommentsUrl
     *
     * @return static
     */
    public function setReviewCommentsUrl($reviewCommentsUrl)
    {
        $this->reviewCommentsUrl = (string) $reviewCommentsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getReviewCommentUrl()
    {
        return $this->reviewCommentUrl;
    }

    /**
     * @param string $reviewCommentUrl
     *
     * @return static
     */
    public function setReviewCommentUrl($reviewCommentUrl)
    {
        $this->reviewCommentUrl = (string) $reviewCommentUrl;
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
     * @return Ref
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param Ref $head
     *
     * @return static
     */
    public function setHead(Ref $head)
    {
        $this->head = $head;
        return $this;
    }

    /**
     * @return Ref
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param Ref $base
     *
     * @return static
     */
    public function setBase(Ref $base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isMerged()
    {
        return $this->merged;
    }

    /**
     * @param boolean $merged
     *
     * @return static
     */
    public function setMerged($merged)
    {
        $this->merged = $merged;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getMergeable()
    {
        return $this->mergeable;
    }

    /**
     * @param bool|null $mergeable
     *
     * @return static
     */
    public function setMergeable($mergeable)
    {
        $this->mergeable = empty($mergeable) ? null : (bool) $mergeable;
        return $this;
    }

    /**
     * @return string
     */
    public function getMergeableState()
    {
        return $this->mergeableState;
    }

    /**
     * @param string $mergeableStage
     *
     * @return static
     */
    public function setMergeableState($mergeableStage)
    {
        $this->mergeableState = (string) $mergeableStage;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getMergedBy()
    {
        return $this->mergedBy;
    }

    /**
     * @param User|null $mergedBy
     *
     * @return static
     */
    public function setMergedBy(User $mergedBy = null)
    {
        $this->mergedBy = $mergedBy;
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
     * @return int
     */
    public function getReviewComments()
    {
        return $this->reviewComments;
    }

    /**
     * @param int $reviewComments
     *
     * @return static
     */
    public function setReviewComments($reviewComments)
    {
        $this->reviewComments = (int) $reviewComments;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommits()
    {
        return $this->commits;
    }

    /**
     * @param int $commits
     *
     * @return static
     */
    public function setCommits($commits)
    {
        $this->commits = (int) $commits;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdditions()
    {
        return $this->additions;
    }

    /**
     * @param int $additions
     *
     * @return static
     */
    public function setAdditions($additions)
    {
        $this->additions = (int) $additions;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeletions()
    {
        return $this->deletions;
    }

    /**
     * @param int $deletions
     *
     * @return static
     */
    public function setDeletions($deletions)
    {
        $this->deletions = (int) $deletions;
        return $this;
    }

    /**
     * @return int
     */
    public function getChangedFiles()
    {
        return $this->changedFiles;
    }

    /**
     * @param int $changedFiles
     *
     * @return static
     */
    public function setChangedFiles($changedFiles)
    {
        $this->changedFiles = (int) $changedFiles;
        return $this;
    }
}
