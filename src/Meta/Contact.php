<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Contact
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     *
     * @Serializer\SerializedName("email")
     * @Serializer\Type("string")
     */
    protected $email;

    /**
     * @var string
     *
     * @Serializer\SerializedName("username")
     * @Serializer\Type("string")
     */
    protected $username;

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
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return static
     */
    public function setEmail($email)
    {
        $this->email = (string) $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return static
     */
    public function setUsername($username)
    {
        $this->username = (string) $username;
        return $this;
    }
}
