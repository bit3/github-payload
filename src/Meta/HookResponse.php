<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class HookResponse
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("code")
     * @Serializer\Type("string")
     */
    protected $code;

    /**
     * @var string
     *
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    protected $status;

    /**
     * @var string
     *
     * @Serializer\SerializedName("message")
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return static
     */
    public function setCode($code)
    {
        $this->code = (string) $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return static
     */
    public function setStatus($status)
    {
        $this->status = (string) $status;
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
}
