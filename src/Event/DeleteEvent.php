<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use ContaoCommunityAlliance\GithubPayload\Meta\Repository;
use ContaoCommunityAlliance\GithubPayload\Meta\User;
use JMS\Serializer\Annotation as Serializer;

class DeleteEvent extends GithubEvent
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("ref")
     * @Serializer\Type("string")
     */
    protected $ref;

    /**
     * @var string
     *
     * @Serializer\SerializedName("ref_type")
     * @Serializer\Type("string")
     */
    protected $refType;

    /**
     * @var string
     *
     * @Serializer\SerializedName("pusher_type")
     * @Serializer\Type("string")
     */
    protected $pusherType;

    /**
     * @var Repository
     *
     * @Serializer\SerializedName("repository")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Repository")
     */
    protected $repository;

    /**
     * @var User
     *
     * @Serializer\SerializedName("sender")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\User")
     */
    protected $sender;

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     *
     * @return static
     */
    public function setRef($ref)
    {
        $this->ref = empty($ref) ? null : (string) $ref;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefType()
    {
        return $this->refType;
    }

    /**
     * @param string $refType
     *
     * @return static
     */
    public function setRefType($refType)
    {
        $this->refType = (string) $refType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPusherType()
    {
        return $this->pusherType;
    }

    /**
     * @param string $pusherType
     *
     * @return static
     */
    public function setPusherType($pusherType)
    {
        $this->pusherType = (string) $pusherType;
        return $this;
    }

    /**
     * @return Repository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param Repository $repository
     *
     * @return static
     */
    public function setRepository(Repository $repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param User $sender
     *
     * @return static
     */
    public function setSender(User $sender)
    {
        $this->sender = $sender;
        return $this;
    }
}
