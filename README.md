[![Version](http://img.shields.io/packagist/v/contao-community-alliance/github-payload.svg?style=flat-square)](https://packagist.org/packages/contao-community-alliance/github-payload)
[![Stable Build Status](http://img.shields.io/travis/contao-community-alliance/github-payload/master.svg?style=flat-square&label=stable build)](https://travis-ci.org/contao-community-alliance/github-payload)
[![Upstream Build Status](http://img.shields.io/travis/contao-community-alliance/github-payload/develop.svg?style=flat-square&label=dev build)](https://travis-ci.org/contao-community-alliance/github-payload)
[![License](http://img.shields.io/packagist/l/contao-community-alliance/github-payload.svg?style=flat-square)](https://github.com/contao-community-alliance/github-payload/blob/master/LICENSE)
[![Downloads](http://img.shields.io/packagist/dt/contao-community-alliance/github-payload.svg?style=flat-square)](https://packagist.org/packages/contao-community-alliance/github-payload)

github webhook payload
======================

This project contains a set of classes to validate, deserialize and serialize the github webhook payload.
The parser use the `jms/serializer` internally, that means you can deserialize and serialize the payload as you like.

Requirements
------------

Annotations are used to define the serialisation settings. Depending on your environment, you may need to register
an annotation class loader. A very simple way is to register the `class_exists` function as loader, if you have a
global autoloader available.

```php
use Doctrine\Common\Annotations\AnnotationRegistry;
AnnotationRegistry::registerLoader('class_exists');
```

Usage examples
--------------

### ... in plain php

```php
<?php
require 'vendor/autoload.php';

$parser = new ContaoCommunityAlliance\GithubPayload\GithubPayloadParser();

// if you have set a secret in the webhook, set it to the parser to validate the signature
$parser->setSecret('...');

$event  = $parser->parsePhp();
```

### ... in symfony / http-foundation

```php
namespace MyBundle\Controller;

class MyController
{
    public function myAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $parser = new \ContaoCommunityAlliance\GithubPayload\GithubPayloadParser();

        // if you have set a secret in the webhook, set it to the parser to validate the signature
        $parser->setSecret('...');

        $event  = $parser->parseRequest($request);
    }
}
```

### ... in any other environment

```php
$eventName = '...'; // The event name, usually the X-Github-Event header.
$payload   = '...'; // The github payload, usually the POST body.
$signature = '...'; // The payload signature, usually the X-Hub-Signature header.

$parser = new ContaoCommunityAlliance\GithubPayload\GithubPayloadParser();

// if you have set a secret in the webhook, set it to the parser to validate the signature
$parser->setSecret('...');

$event  = $parser->parse($eventName, $payload, $signature);
```
