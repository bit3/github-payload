<?php

namespace ContaoCommunityAlliance\GithubPayload\Exception;

use Symfony\Component\HttpFoundation\Request;

class BadSignatureException extends \InvalidArgumentException
{
    protected $payload;

    protected $signature;

    protected $signatureHash;

    protected $payloadHash;

    public function __construct($payload, $signature, $signatureHash, $payloadHash)
    {
        parent::__construct('Bad signature, computed ' . $payloadHash . ' but received ' . $signature);
        $this->payload       = (string) $payload;
        $this->signature     = (string) $signature;
        $this->signatureHash = (string) $signatureHash;
        $this->payloadHash   = (string) $payloadHash;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @return string
     */
    public function getSignatureHash()
    {
        return $this->signatureHash;
    }

    /**
     * @return string
     */
    public function getPayloadHash()
    {
        return $this->payloadHash;
    }
}
