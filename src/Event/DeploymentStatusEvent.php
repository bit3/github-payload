<?php

namespace ContaoCommunityAlliance\GithubPayload\Event;

use ContaoCommunityAlliance\GithubPayload\Meta\Deployment;
use ContaoCommunityAlliance\GithubPayload\Meta\Repository;
use ContaoCommunityAlliance\GithubPayload\Meta\User;
use JMS\Serializer\Annotation as Serializer;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class DeploymentStatusEvent extends AbstractEvent
{
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
     * @Serializer\SerializedName("state")
     * @Serializer\Type("string")
     */
    protected $state;

    /**
     * @var Deployment
     *
     * @Serializer\SerializedName("deployment")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\Deployment")
     */
    protected $deployment;

    /**
     * @var string
     *
     * @Serializer\SerializedName("target_url")
     * @Serializer\Type("string")
     */
    protected $targetUrl;

    /**
     * @var string
     *
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    protected $description;

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
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return static
     */
    public function setState($state)
    {
        $this->state = (string) $state;
        return $this;
    }

    /**
     * @return Deployment
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * @param Deployment $deployment
     *
     * @return static
     */
    public function setDeployment(Deployment $deployment)
    {
        $this->deployment = $deployment;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     *
     * @return static
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = (string) $targetUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return static
     */
    public function setDescription($description)
    {
        $this->description = (string) $description;
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
