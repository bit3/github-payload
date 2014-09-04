<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Page
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("page_name")
     * @Serializer\Type("string")
     */
    protected $pageName;

    /**
     * @var string
     *
     * @Serializer\SerializedName("title")
     * @Serializer\Type("string")
     */
    protected $title;

    /**
     * @var string
     *
     * @Serializer\SerializedName("summary")
     * @Serializer\Type("string")
     */
    protected $summary;

    /**
     * @var string
     *
     * @Serializer\SerializedName("action")
     * @Serializer\Type("string")
     */
    protected $action;

    /**
     * @var string
     *
     * @Serializer\SerializedName("sha")
     * @Serializer\Type("string")
     */
    protected $sha;

    /**
     * @var string
     *
     * @Serializer\SerializedName("html_url")
     * @Serializer\Type("string")
     */
    protected $htmlUrl;

    /**
     * @return string
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * @param string $pageName
     *
     * @return static
     */
    public function setPageName($pageName)
    {
        $this->pageName = (string) $pageName;
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
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return static
     */
    public function setSummary($summary)
    {
        $this->summary = (string) $summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     *
     * @return static
     */
    public function setAction($action)
    {
        $this->action = (string) $action;
        return $this;
    }

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
}
