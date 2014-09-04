<?php

namespace ContaoCommunityAlliance\GithubPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Branch
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var SimpleRef
     *
     * @Serializer\SerializedName("commit")
     * @Serializer\Type("ContaoCommunityAlliance\GithubPayload\Meta\SimpleRef")
     */
    protected $commit;

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
     * @return SimpleRef
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param SimpleRef $commit
     *
     * @return static
     */
    public function setCommit(SimpleRef $commit)
    {
        $this->commit = $commit;
        return $this;
    }
}
