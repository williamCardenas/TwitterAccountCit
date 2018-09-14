<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class TwitterAccountHandlerFactory
{
    public function __invoke(ContainerInterface $container) : TwitterAccountHandler
    {
        return new TwitterAccountHandler($container->get(TemplateRendererInterface::class));
    }
}
