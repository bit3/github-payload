<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Release
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
     * @Serializer\SerializedName("assets_url")
     * @Serializer\Type("string")
     */
    protected $assetsUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("upload_url")
     * @Serializer\Type("string")
     */
    protected $uploadUrl;

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
     * @var string
     *
     * @Serializer\SerializedName("tag_name")
     * @Serializer\Type("string")
     */
    protected $tagName;

    /**
     * @var string
     *
     * @Serializer\SerializedName("target_commitish")
     * @Serializer\Type("string")
     */
    protected $targetCommitish;

    /**
     * @var string
     *
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("draft")
     * @Serializer\Type("boolean")
     */
    protected $draft;

    /**
     * @var User
     *
     * @Serializer\SerializedName("author")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $author;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("prerelease")
     * @Serializer\Type("boolean")
     */
    protected $prerelease;

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
     * @Serializer\SerializedName("published_at")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z', 'UTC'>")
     */
    protected $publishedAt;

    /**
     * @var string[]
     *
     * @Serializer\SerializedName("assets")
     * @Serializer\Type("array<string>")
     */
    protected $assets;

    /**
     * @var string
     *
     * @Serializer\SerializedName("tarball_url")
     * @Serializer\Type("string")
     */
    protected $tarballUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("zipball_url")
     * @Serializer\Type("string")
     */
    protected $zipballUrl;

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
    public function getAssetsUrl()
    {
        return $this->assetsUrl;
    }

    /**
     * @param string $assetsUrl
     *
     * @return static
     */
    public function setAssetsUrl($assetsUrl)
    {
        $this->assetsUrl = (string) $assetsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->uploadUrl;
    }

    /**
     * @param string $uploadUrl
     *
     * @return static
     */
    public function setUploadUrl($uploadUrl)
    {
        $this->uploadUrl = (string) $uploadUrl;
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
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     *
     * @return static
     */
    public function setTagName($tagName)
    {
        $this->tagName = (string) $tagName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetCommitish()
    {
        return $this->targetCommitish;
    }

    /**
     * @param string $targetCommitish
     *
     * @return static
     */
    public function setTargetCommitish($targetCommitish)
    {
        $this->targetCommitish = (string) $targetCommitish;
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
    public function isDraft()
    {
        return $this->draft;
    }

    /**
     * @param boolean $draft
     *
     * @return static
     */
    public function setDraft($draft)
    {
        $this->draft = (bool) $draft;
        return $this;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param User $author
     *
     * @return static
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPrerelease()
    {
        return $this->prerelease;
    }

    /**
     * @param boolean $prerelease
     *
     * @return static
     */
    public function setPrerelease($prerelease)
    {
        $this->prerelease = (bool) $prerelease;
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
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTime $publishedAt
     *
     * @return static
     */
    public function setPublishedAt(\DateTime $publishedAt)
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @param \string[] $assets
     *
     * @return static
     */
    public function setAssets($assets)
    {
        $this->assets = array_map('strval', $assets);
        return $this;
    }

    /**
     * @return string
     */
    public function getTarballUrl()
    {
        return $this->tarballUrl;
    }

    /**
     * @param string $tarballUrl
     *
     * @return static
     */
    public function setTarballUrl($tarballUrl)
    {
        $this->tarballUrl = (string) $tarballUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipballUrl()
    {
        return $this->zipballUrl;
    }

    /**
     * @param string $zipballUrl
     *
     * @return static
     */
    public function setZipballUrl($zipballUrl)
    {
        $this->zipballUrl = (string) $zipballUrl;
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
