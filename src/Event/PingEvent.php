<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use ContaoCommunityAlliance\GithubPayload\Meta\Repository;
use ContaoCommunityAlliance\GithubPayload\Meta\User;
use JMS\Serializer\Annotation as Serializer;

class PingEvent extends AbstractEvent
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("zen")
     * @Serializer\Type("string")
     */
    protected $zen;

    /**
     * @var Hook
     *
     * @Serializer\SerializedName("hook")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Hook")
     */
    protected $hook;

    /**
     * @var int
     *
     * @Serializer\SerializedName("hook_id")
     * @Serializer\Type("integer")
     */
    protected $hookId;

    /**
     * @return string
     */
    public function getZen()
    {
        return $this->zen;
    }

    /**
     * @param string $zen
     *
     * @return static
     */
    public function setZen($zen)
    {
        $this->zen = (string) $zen;
        return $this;
    }

    /**
     * @return Hook
     */
    public function getHook()
    {
        return $this->hook;
    }

    /**
     * @param Hook $hook
     *
     * @return static
     */
    public function setHook(Hook $hook)
    {
        $this->hook = $hook;
        return $this;
    }

    /**
     * @return int
     */
    public function getHookId()
    {
        return $this->hookId;
    }

    /**
     * @param int $hookId
     *
     * @return static
     */
    public function setHookId($hookId)
    {
        $this->hookId = (int) $hookId;
        return $this;
    }
}
