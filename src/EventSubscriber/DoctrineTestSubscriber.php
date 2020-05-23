<?php

namespace App\EventSubscriber;

use App\Service\TestService;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Events;

/**
 * @package App\EventSubscriber
 */
class DoctrineTestSubscriber implements EventSubscriber
{
    /**
     * @var TestService
     */
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function getSubscribedEvents()
    {
        return [
            Events::onFlush => 'onFlush',
        ];
    }

    public function onFlush(OnFlushEventArgs $eventArgs)
    {
        $this->testService->test();
    }
}
