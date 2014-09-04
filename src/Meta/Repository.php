<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Repository
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
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     *
     * @Serializer\SerializedName("full_name")
     * @Serializer\Type("string")
     */
    protected $fullName;

    /**
     * @var User
     *
     * @Serializer\SerializedName("owner")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $owner;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("private")
     * @Serializer\Type("boolean")
     */
    protected $private;

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
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("fork")
     * @Serializer\Type("boolean")
     */
    protected $fork;

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
     * @Serializer\SerializedName("forks_url")
     * @Serializer\Type("string")
     */
    protected $forksUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("keys_url")
     * @Serializer\Type("string")
     */
    protected $keysUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("collaborators_url")
     * @Serializer\Type("string")
     */
    protected $collaboratorsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("teams_url")
     * @Serializer\Type("string")
     */
    protected $teamsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("hooks_url")
     * @Serializer\Type("string")
     */
    protected $hooksUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("issue_events_url")
     * @Serializer\Type("string")
     */
    protected $issueEventsUrl;

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
     * @Serializer\SerializedName("assignees_url")
     * @Serializer\Type("string")
     */
    protected $assigneesUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("branches_url")
     * @Serializer\Type("string")
     */
    protected $branchesUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("tags_url")
     * @Serializer\Type("string")
     */
    protected $tagsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("blobs_url")
     * @Serializer\Type("string")
     */
    protected $blobsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("git_tags_url")
     * @Serializer\Type("string")
     */
    protected $gitTagsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("git_refs_url")
     * @Serializer\Type("string")
     */
    protected $gitRefsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("trees_url")
     * @Serializer\Type("string")
     */
    protected $treesUrl;

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
     * @Serializer\SerializedName("languages_url")
     * @Serializer\Type("string")
     */
    protected $languagesUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("stargazers_url")
     * @Serializer\Type("string")
     */
    protected $stargazersUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("contributors_url")
     * @Serializer\Type("string")
     */
    protected $contributorsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("subscribers_url")
     * @Serializer\Type("string")
     */
    protected $subscribersUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("subscriptions_url")
     * @Serializer\Type("string")
     */
    protected $subscriptionsUrl;

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
     * @Serializer\SerializedName("git_commits_url")
     * @Serializer\Type("string")
     */
    protected $gitCommitsUrl;

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
     * @Serializer\SerializedName("issue_comments_url")
     * @Serializer\Type("string")
     */
    protected $issueCommentUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("contents_url")
     * @Serializer\Type("string")
     */
    protected $contentsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("compare_url")
     * @Serializer\Type("string")
     */
    protected $compareUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("merges_url")
     * @Serializer\Type("string")
     */
    protected $mergesUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("archive_url")
     * @Serializer\Type("string")
     */
    protected $archiveUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("downloads_url")
     * @Serializer\Type("string")
     */
    protected $downloadsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("issues_url")
     * @Serializer\Type("string")
     */
    protected $issuesUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("pulls_url")
     * @Serializer\Type("string")
     */
    protected $pullsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("milestones_url")
     * @Serializer\Type("string")
     */
    protected $milestonesUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("notifications_url")
     * @Serializer\Type("string")
     */
    protected $notificationsUrl;

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
     * @Serializer\SerializedName("releases_url")
     * @Serializer\Type("string")
     */
    protected $releasesUrl;

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
     * @Serializer\SerializedName("pushed_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z', 'UTC'>")
     */
    protected $pushedAt;

    /**
     * @var string
     *
     * @Serializer\SerializedName("git_url")
     * @Serializer\Type("string")
     */
    protected $gitUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("ssh_url")
     * @Serializer\Type("string")
     */
    protected $sshUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("clone_url")
     * @Serializer\Type("string")
     */
    protected $cloneUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("svn_url")
     * @Serializer\Type("string")
     */
    protected $svnUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("homepage")
     * @Serializer\Type("string")
     */
    protected $homepage;

    /**
     * @var int
     *
     * @Serializer\SerializedName("size")
     * @Serializer\Type("integer")
     */
    protected $size;

    /**
     * @var int
     *
     * @Serializer\SerializedName("stargazers_count")
     * @Serializer\Type("integer")
     */
    protected $stargazersCount;

    /**
     * @var int
     *
     * @Serializer\SerializedName("watchers_count")
     * @Serializer\Type("integer")
     */
    protected $watchersCount;

    /**
     * @var string
     *
     * @Serializer\SerializedName("language")
     * @Serializer\Type("string")
     */
    protected $language;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("has_issues")
     * @Serializer\Type("boolean")
     */
    protected $hasIssues;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("has_downloads")
     * @Serializer\Type("boolean")
     */
    protected $hasDownloads;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("has_wiki")
     * @Serializer\Type("boolean")
     */
    protected $hasWiki;

    /**
     * @var int
     *
     * @Serializer\SerializedName("forks_count")
     * @Serializer\Type("integer")
     */
    protected $forksCount;

    /**
     * @var string
     *
     * @Serializer\SerializedName("mirror_url")
     * @Serializer\Type("string")
     */
    protected $mirrorUrl;

    /**
     * @var int
     *
     * @Serializer\SerializedName("open_issues_count")
     * @Serializer\Type("integer")
     */
    protected $openIssuesCount;

    /**
     * @var int
     *
     * @Serializer\SerializedName("forks")
     * @Serializer\Type("integer")
     */
    protected $forks;

    /**
     * @var int
     *
     * @Serializer\SerializedName("open_issues")
     * @Serializer\Type("integer")
     */
    protected $openIssues;

    /**
     * @var int
     *
     * @Serializer\SerializedName("watchers")
     * @Serializer\Type("integer")
     */
    protected $watchers;

    /**
     * @var string
     *
     * @Serializer\SerializedName("default_branch")
     * @Serializer\Type("string")
     */
    protected $defaultBranch;

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
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     *
     * @return static
     */
    public function setFullName($fullName)
    {
        $this->fullName = (string) $fullName;
        return $this;
    }

    /**
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param User $owner
     *
     * @return static
     */
    public function setOwner(User $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPrivate()
    {
        return $this->private;
    }

    /**
     * @param boolean $private
     *
     * @return static
     */
    public function setPrivate($private)
    {
        $this->private = $private;
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
     * @return bool
     */
    public function isFork()
    {
        return $this->fork;
    }

    /**
     * @param bool $fork
     *
     * @return static
     */
    public function setFork($fork)
    {
        $this->fork = (bool) $fork;
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
     * @return string
     */
    public function getForksUrl()
    {
        return $this->forksUrl;
    }

    /**
     * @param string $forksUrl
     *
     * @return static
     */
    public function setForksUrl($forksUrl)
    {
        $this->forksUrl = (string) $forksUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeysUrl()
    {
        return $this->keysUrl;
    }

    /**
     * @param string $keysUrl
     *
     * @return static
     */
    public function setKeysUrl($keysUrl)
    {
        $this->keysUrl = (string) $keysUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollaboratorsUrl()
    {
        return $this->collaboratorsUrl;
    }

    /**
     * @param string $collaboratorsUrl
     *
     * @return static
     */
    public function setCollaboratorsUrl($collaboratorsUrl)
    {
        $this->collaboratorsUrl = (string) $collaboratorsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamsUrl()
    {
        return $this->teamsUrl;
    }

    /**
     * @param string $teamsUrl
     *
     * @return static
     */
    public function setTeamsUrl($teamsUrl)
    {
        $this->teamsUrl = (string) $teamsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getHooksUrl()
    {
        return $this->hooksUrl;
    }

    /**
     * @param string $hooksUrl
     *
     * @return static
     */
    public function setHooksUrl($hooksUrl)
    {
        $this->hooksUrl = (string) $hooksUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssueEventsUrl()
    {
        return $this->issueEventsUrl;
    }

    /**
     * @param string $issueEventsUrl
     *
     * @return static
     */
    public function setIssueEventsUrl($issueEventsUrl)
    {
        $this->issueEventsUrl = (string) $issueEventsUrl;
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
    public function getAssigneesUrl()
    {
        return $this->assigneesUrl;
    }

    /**
     * @param string $assigneesUrl
     *
     * @return static
     */
    public function setAssigneesUrl($assigneesUrl)
    {
        $this->assigneesUrl = (string) $assigneesUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranchesUrl()
    {
        return $this->branchesUrl;
    }

    /**
     * @param string $branchesUrl
     *
     * @return static
     */
    public function setBranchesUrl($branchesUrl)
    {
        $this->branchesUrl = (string) $branchesUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagsUrl()
    {
        return $this->tagsUrl;
    }

    /**
     * @param string $tagsUrl
     *
     * @return static
     */
    public function setTagsUrl($tagsUrl)
    {
        $this->tagsUrl = (string) $tagsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlobsUrl()
    {
        return $this->blobsUrl;
    }

    /**
     * @param string $blobsUrl
     *
     * @return static
     */
    public function setBlobsUrl($blobsUrl)
    {
        $this->blobsUrl = (string) $blobsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGitTagsUrl()
    {
        return $this->gitTagsUrl;
    }

    /**
     * @param string $gitTagsUrl
     *
     * @return static
     */
    public function setGitTagsUrl($gitTagsUrl)
    {
        $this->gitTagsUrl = (string) $gitTagsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGitRefsUrl()
    {
        return $this->gitRefsUrl;
    }

    /**
     * @param string $gitRefsUrl
     *
     * @return static
     */
    public function setGitRefsUrl($gitRefsUrl)
    {
        $this->gitRefsUrl = (string) $gitRefsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTreesUrl()
    {
        return $this->treesUrl;
    }

    /**
     * @param string $treesUrl
     *
     * @return static
     */
    public function setTreesUrl($treesUrl)
    {
        $this->treesUrl = (string) $treesUrl;
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
    public function getLanguagesUrl()
    {
        return $this->languagesUrl;
    }

    /**
     * @param string $languagesUrl
     *
     * @return static
     */
    public function setLanguagesUrl($languagesUrl)
    {
        $this->languagesUrl = (string) $languagesUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getStargazersUrl()
    {
        return $this->stargazersUrl;
    }

    /**
     * @param string $stargazersUrl
     *
     * @return static
     */
    public function setStargazersUrl($stargazersUrl)
    {
        $this->stargazersUrl = (string) $stargazersUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getContributorsUrl()
    {
        return $this->contributorsUrl;
    }

    /**
     * @param string $contributorsUrl
     *
     * @return static
     */
    public function setContributorsUrl($contributorsUrl)
    {
        $this->contributorsUrl = (string) $contributorsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscribersUrl()
    {
        return $this->subscribersUrl;
    }

    /**
     * @param string $subscribersUrl
     *
     * @return static
     */
    public function setSubscribersUrl($subscribersUrl)
    {
        $this->subscribersUrl = (string) $subscribersUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionsUrl()
    {
        return $this->subscriptionsUrl;
    }

    /**
     * @param string $subscriptionsUrl
     *
     * @return static
     */
    public function setSubscriptionsUrl($subscriptionsUrl)
    {
        $this->subscriptionsUrl = (string) $subscriptionsUrl;
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
    public function getGitCommitsUrl()
    {
        return $this->gitCommitsUrl;
    }

    /**
     * @param string $gitCommitsUrl
     *
     * @return static
     */
    public function setGitCommitsUrl($gitCommitsUrl)
    {
        $this->gitCommitsUrl = (string) $gitCommitsUrl;
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
    public function getIssueCommentUrl()
    {
        return $this->issueCommentUrl;
    }

    /**
     * @param string $issueCommentUrl
     *
     * @return static
     */
    public function setIssueCommentUrl($issueCommentUrl)
    {
        $this->issueCommentUrl = (string) $issueCommentUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentsUrl()
    {
        return $this->contentsUrl;
    }

    /**
     * @param string $contentsUrl
     *
     * @return static
     */
    public function setContentsUrl($contentsUrl)
    {
        $this->contentsUrl = (string) $contentsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompareUrl()
    {
        return $this->compareUrl;
    }

    /**
     * @param string $compareUrl
     *
     * @return static
     */
    public function setCompareUrl($compareUrl)
    {
        $this->compareUrl = (string) $compareUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getMergesUrl()
    {
        return $this->mergesUrl;
    }

    /**
     * @param string $mergesUrl
     *
     * @return static
     */
    public function setMergesUrl($mergesUrl)
    {
        $this->mergesUrl = (string) $mergesUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getArchiveUrl()
    {
        return $this->archiveUrl;
    }

    /**
     * @param string $archiveUrl
     *
     * @return static
     */
    public function setArchiveUrl($archiveUrl)
    {
        $this->archiveUrl = (string) $archiveUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadsUrl()
    {
        return $this->downloadsUrl;
    }

    /**
     * @param string $downloadsUrl
     *
     * @return static
     */
    public function setDownloadsUrl($downloadsUrl)
    {
        $this->downloadsUrl = (string) $downloadsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuesUrl()
    {
        return $this->issuesUrl;
    }

    /**
     * @param string $issuesUrl
     *
     * @return static
     */
    public function setIssuesUrl($issuesUrl)
    {
        $this->issuesUrl = (string) $issuesUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPullsUrl()
    {
        return $this->pullsUrl;
    }

    /**
     * @param string $pullsUrl
     *
     * @return static
     */
    public function setPullsUrl($pullsUrl)
    {
        $this->pullsUrl = (string) $pullsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestonesUrl()
    {
        return $this->milestonesUrl;
    }

    /**
     * @param string $milestonesUrl
     *
     * @return static
     */
    public function setMilestonesUrl($milestonesUrl)
    {
        $this->milestonesUrl = (string) $milestonesUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationsUrl()
    {
        return $this->notificationsUrl;
    }

    /**
     * @param string $notificationsUrl
     *
     * @return static
     */
    public function setNotificationsUrl($notificationsUrl)
    {
        $this->notificationsUrl = (string) $notificationsUrl;
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
    public function getReleasesUrl()
    {
        return $this->releasesUrl;
    }

    /**
     * @param string $releasesUrl
     *
     * @return static
     */
    public function setReleasesUrl($releasesUrl)
    {
        $this->releasesUrl = (string) $releasesUrl;
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
    public function getPushedAt()
    {
        return $this->pushedAt;
    }

    /**
     * @param \DateTime $pushedAt
     *
     * @return static
     */
    public function setPushedAt(\DateTime $pushedAt)
    {
        $this->pushedAt = $pushedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getGitUrl()
    {
        return $this->gitUrl;
    }

    /**
     * @param string $gitUrl
     *
     * @return static
     */
    public function setGitUrl($gitUrl)
    {
        $this->gitUrl = (string) $gitUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSshUrl()
    {
        return $this->sshUrl;
    }

    /**
     * @param string $sshUrl
     *
     * @return static
     */
    public function setSshUrl($sshUrl)
    {
        $this->sshUrl = (string) $sshUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloneUrl()
    {
        return $this->cloneUrl;
    }

    /**
     * @param string $cloneUrl
     *
     * @return static
     */
    public function setCloneUrl($cloneUrl)
    {
        $this->cloneUrl = (string) $cloneUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSvnUrl()
    {
        return $this->svnUrl;
    }

    /**
     * @param string $svnUrl
     *
     * @return static
     */
    public function setSvnUrl($svnUrl)
    {
        $this->svnUrl = (string) $svnUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     *
     * @return static
     */
    public function setHomepage($homepage)
    {
        $this->homepage = (string) $homepage;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return static
     */
    public function setSize($size)
    {
        $this->size = (int) $size;
        return $this;
    }

    /**
     * @return int
     */
    public function getStargazersCount()
    {
        return $this->stargazersCount;
    }

    /**
     * @param int $stargazersCount
     *
     * @return static
     */
    public function setStargazersCount($stargazersCount)
    {
        $this->stargazersCount = (int) $stargazersCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getWatchersCount()
    {
        return $this->watchersCount;
    }

    /**
     * @param int $watchersCount
     *
     * @return static
     */
    public function setWatchersCount($watchersCount)
    {
        $this->watchersCount = (int) $watchersCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return static
     */
    public function setLanguage($language)
    {
        $this->language = (string) $language;
        return $this;
    }

    /**
     * @return boolean
     */
    public function hasIssues()
    {
        return $this->hasIssues;
    }

    /**
     * @param boolean $hasIssues
     *
     * @return static
     */
    public function setHasIssues($hasIssues)
    {
        $this->hasIssues = $hasIssues;
        return $this;
    }

    /**
     * @return boolean
     */
    public function hasDownloads()
    {
        return $this->hasDownloads;
    }

    /**
     * @param boolean $hasDownloads
     *
     * @return static
     */
    public function setHasDownloads($hasDownloads)
    {
        $this->hasDownloads = $hasDownloads;
        return $this;
    }

    /**
     * @return boolean
     */
    public function hasWiki()
    {
        return $this->hasWiki;
    }

    /**
     * @param boolean $hasWiki
     *
     * @return static
     */
    public function setHasWiki($hasWiki)
    {
        $this->hasWiki = $hasWiki;
        return $this;
    }

    /**
     * @return int
     */
    public function getForksCount()
    {
        return $this->forksCount;
    }

    /**
     * @param int $forksCount
     *
     * @return static
     */
    public function setForksCount($forksCount)
    {
        $this->forksCount = (int) $forksCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getMirrorUrl()
    {
        return $this->mirrorUrl;
    }

    /**
     * @param string $mirrorUrl
     *
     * @return static
     */
    public function setMirrorUrl($mirrorUrl)
    {
        $this->mirrorUrl = (string) $mirrorUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenIssuesCount()
    {
        return $this->openIssuesCount;
    }

    /**
     * @param int $openIssuesCount
     *
     * @return static
     */
    public function setOpenIssuesCount($openIssuesCount)
    {
        $this->openIssuesCount = (int) $openIssuesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getForks()
    {
        return $this->forks;
    }

    /**
     * @param int $forks
     *
     * @return static
     */
    public function setForks($forks)
    {
        $this->forks = (int) $forks;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenIssues()
    {
        return $this->openIssues;
    }

    /**
     * @param int $openIssues
     *
     * @return static
     */
    public function setOpenIssues($openIssues)
    {
        $this->openIssues = (int) $openIssues;
        return $this;
    }

    /**
     * @return int
     */
    public function getWatchers()
    {
        return $this->watchers;
    }

    /**
     * @param int $watchers
     *
     * @return static
     */
    public function setWatchers($watchers)
    {
        $this->watchers = (int) $watchers;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultBranch()
    {
        return $this->defaultBranch;
    }

    /**
     * @param string $defaultBranch
     *
     * @return static
     */
    public function setDefaultBranch($defaultBranch)
    {
        $this->defaultBranch = (string) $defaultBranch;
        return $this;
    }
}
