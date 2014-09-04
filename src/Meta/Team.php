<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Team
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

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
     * @Serializer\SerializedName("slug")
     * @Serializer\Type("string")
     */
    protected $slug;

    /**
     * @var string
     *
     * @Serializer\SerializedName("permission")
     * @Serializer\Type("string")
     */
    protected $permission;

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
     * @Serializer\SerializedName("members_url")
     * @Serializer\Type("string")
     */
    protected $membersUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("repositories_url")
     * @Serializer\Type("string")
     */
    protected $repositoriesUrl;

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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return static
     */
    public function setSlug($slug)
    {
        $this->slug = (string) $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param string $permission
     *
     * @return static
     */
    public function setPermission($permission)
    {
        $this->permission = (string) $permission;
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
    public function getMembersUrl()
    {
        return $this->membersUrl;
    }

    /**
     * @param string $membersUrl
     *
     * @return static
     */
    public function setMembersUrl($membersUrl)
    {
        $this->membersUrl = (string) $membersUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepositoriesUrl()
    {
        return $this->repositoriesUrl;
    }

    /**
     * @param string $repositoriesUrl
     *
     * @return static
     */
    public function setRepositoriesUrl($repositoriesUrl)
    {
        $this->repositoriesUrl = (string) $repositoriesUrl;
        return $this;
    }
}
