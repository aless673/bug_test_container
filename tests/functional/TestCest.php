<?php

namespace App\Tests;

use App\Entity\User;
use App\Service\TestService;

class TestCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function handleAppendixErrors(FunctionalTester $I)
    {
        $testService = $I->grabService(TestService::class);
        $testService->test();
        $I->haveInRepository(User::class);
    }
}
