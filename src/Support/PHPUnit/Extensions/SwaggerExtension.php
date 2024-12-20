<?php

namespace RonasIT\AutoDoc\Support\PHPUnit\Extensions;

use PHPUnit\Runner\Extension\Extension as PhpunitExtension;
use PHPUnit\Runner\Extension\Facade as EventFacade;
use PHPUnit\Runner\Extension\ParameterCollection;
use PHPUnit\TextUI\Configuration\Configuration;
use RonasIT\AutoDoc\Support\PHPUnit\EventSubscribers\SwaggerSaveDocumentationSubscriber;

final class SwaggerExtension implements PhpunitExtension
{
    public function bootstrap(Configuration $configuration, EventFacade $facade, ParameterCollection $parameters): void
    {
        $facade->registerSubscriber(new SwaggerSaveDocumentationSubscriber());
    }
}
