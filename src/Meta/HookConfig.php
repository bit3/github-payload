<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class HookConfig
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("secret")
     * @Serializer\Type("string")
     */
    protected $secret;

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
     * @Serializer\SerializedName("content_type")
     * @Serializer\Type("string")
     */
    protected $contentType;

    /**
     * @var boolean
     *
     * @Serializer\SerializedName("insecure_ssl")
     * @Serializer\Type("boolean")
     */
    protected $insecureSsl;

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     *
     * @return static
     */
    public function setSecret($secret)
    {
        $this->secret = (string) $secret;
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
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     *
     * @return static
     */
    public function setContentType($contentType)
    {
        $this->contentType = (string) $contentType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isInsecureSsl()
    {
        return $this->insecureSsl;
    }

    /**
     * @param boolean $insecureSsl
     *
     * @return static
     */
    public function setInsecureSsl($insecureSsl)
    {
        $this->insecureSsl = (bool) $insecureSsl;
        return $this;
    }
}
