<?php

namespace Drupal\Tests\premium\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\premium\PremiumService;
use Drupal\user\Entity\User;

/**
 * Class PremiumServiceTest
 */
class PremiumServiceTest extends UnitTestCase
{
    private $service;

    /**
     * @before
     */
    public function init()
    {
        $managerStub = new \stdClass();
        $managerStub->getStorage = function() {
            $userStorageStub = new \stdClass();
            $userStorageStub->load = function() {
                $user = new \stdClass();
                $user->hasPermission = function() {return true;};
                return $user;
            };
            return $userStorageStub;
        };

        $this->service = new PremiumService($managerStub);
    }

    /**
     * @coversDefaultClass PremiumService
     * @group premium
     */
    public function testIsUserPremium()
    {
        $userIsPremium = $this->service->isUserPremium(42);

        $this->assertEquals(true, $userIsPremium);
    }
}