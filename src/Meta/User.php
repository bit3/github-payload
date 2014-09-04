<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class User
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("login")
     * @Serializer\Type("string")
     */
    protected $login;

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
     * @Serializer\SerializedName("avatar_url")
     * @Serializer\Type("string")
     */
    protected $avatarUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("gravatar_id")
     * @Serializer\Type("string")
     */
    protected $gravatarId;

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
     * @var string
     *
     * @Serializer\SerializedName("followers_url")
     * @Serializer\Type("string")
     */
    protected $followersUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("following_url")
     * @Serializer\Type("string")
     */
    protected $followingUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("gists_url")
     * @Serializer\Type("string")
     */
    protected $gistsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("starred_url")
     * @Serializer\Type("string")
     */
    protected $starredUrl;

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
     * @Serializer\SerializedName("organizations_url")
     * @Serializer\Type("string")
     */
    protected $organizationsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("repos_url")
     * @Serializer\Type("string")
     */
    protected $reposUrl;

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
     * @Serializer\SerializedName("received_events_url")
     * @Serializer\Type("string")
     */
    protected $receivedEventsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("type")
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("site_admin")
     * @Serializer\Type("boolean")
     */
    protected $siteAdmin;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     *
     * @return static
     */
    public function setLogin($login)
    {
        $this->login = (string) $login;
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
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     *
     * @return static
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = (string) $avatarUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGravatarId()
    {
        return $this->gravatarId;
    }

    /**
     * @param string $gravatarId
     *
     * @return static
     */
    public function setGravatarId($gravatarId)
    {
        $this->gravatarId = (string) $gravatarId;
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
    public function getFollowersUrl()
    {
        return $this->followersUrl;
    }

    /**
     * @param string $followersUrl
     *
     * @return static
     */
    public function setFollowersUrl($followersUrl)
    {
        $this->followersUrl = (string) $followersUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowingUrl()
    {
        return $this->followingUrl;
    }

    /**
     * @param string $followingUrl
     *
     * @return static
     */
    public function setFollowingUrl($followingUrl)
    {
        $this->followingUrl = (string) $followingUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGistsUrl()
    {
        return $this->gistsUrl;
    }

    /**
     * @param string $gistsUrl
     *
     * @return static
     */
    public function setGistsUrl($gistsUrl)
    {
        $this->gistsUrl = (string) $gistsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarredUrl()
    {
        return $this->starredUrl;
    }

    /**
     * @param string $starredUrl
     *
     * @return static
     */
    public function setStarredUrl($starredUrl)
    {
        $this->starredUrl = (string) $starredUrl;
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
    public function getOrganizationsUrl()
    {
        return $this->organizationsUrl;
    }

    /**
     * @param string $organizationsUrl
     *
     * @return static
     */
    public function setOrganizationsUrl($organizationsUrl)
    {
        $this->organizationsUrl = (string) $organizationsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getReposUrl()
    {
        return $this->reposUrl;
    }

    /**
     * @param string $reposUrl
     *
     * @return static
     */
    public function setReposUrl($reposUrl)
    {
        $this->reposUrl = (string) $reposUrl;
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
    public function getReceivedEventsUrl()
    {
        return $this->receivedEventsUrl;
    }

    /**
     * @param string $receivedEventsUrl
     *
     * @return static
     */
    public function setReceivedEventsUrl($receivedEventsUrl)
    {
        $this->receivedEventsUrl = (string) $receivedEventsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return static
     */
    public function setType($type)
    {
        $this->type = (string) $type;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSiteAdmin()
    {
        return $this->siteAdmin;
    }

    /**
     * @param boolean $siteAdmin
     *
     * @return static
     */
    public function setSiteAdmin($siteAdmin)
    {
        $this->siteAdmin = $siteAdmin;
        return $this;
    }
}
