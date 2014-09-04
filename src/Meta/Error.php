<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Error
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("message")
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     *
     * @return static
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
