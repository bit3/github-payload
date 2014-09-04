<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class SimpleCommit
{
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
     * @var string
     *
     * @Serializer\SerializedName("message")
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @var SimpleRef
     *
     * @Serializer\SerializedName("tree")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\SimpleRef")
     */
    protected $tree;

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
     * @Serializer\SerializedName("comment_count")
     * @Serializer\Type("integer")
     */
    protected $commentCount;

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
     * @return SimpleRef
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * @param SimpleRef $tree
     *
     * @return static
     */
    public function setTree(SimpleRef $tree)
    {
        $this->tree = $tree;
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
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param int $commentCount
     *
     * @return static
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = (int) $commentCount;
        return $this;
    }
}
