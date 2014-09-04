<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class StatusCommit
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("sha")
     * @Serializer\Type("string")
     */
    protected $sha;

    /**
     * @var SimpleCommit
     *
     * @Serializer\SerializedName("commit")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\SimpleCommit")
     */
    protected $commit;

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
     * @Serializer\SerializedName("comments_url")
     * @Serializer\Type("string")
     */
    protected $commentsUrl;

    /**
     * @var User
     *
     * @Serializer\SerializedName("author")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $author;

    /**
     * @var User
     *
     * @Serializer\SerializedName("committer")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $committer;

    /**
     * @var string[]
     *
     * @Serializer\SerializedName("parents")
     * @Serializer\Type("array<string>")
     */
    protected $parents;

    /**
     * @return string
     */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * @param string $sha
     *
     * @return static
     */
    public function setSha($sha)
    {
        $this->sha = (string) $sha;
        return $this;
    }

    /**
     * @return SimpleCommit
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param SimpleCommit $commit
     *
     * @return static
     */
    public function setCommit(SimpleCommit $commit)
    {
        $this->commit = $commit;
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
     * @return User
     */
    public function getCommitter()
    {
        return $this->committer;
    }

    /**
     * @param User $committer
     *
     * @return static
     */
    public function setCommitter(User $committer)
    {
        $this->committer = $committer;
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param \string[] $parents
     *
     * @return static
     */
    public function setParents($parents)
    {
        $this->parents = array_map('strval', $parents);
        return $this;
    }
}
