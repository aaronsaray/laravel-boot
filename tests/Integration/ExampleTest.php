<?php

declare(strict_types=1);

namespace Tests\Integration;

use PackageForLaravel\TestingFramework\TestCases\IntegrationTestCase;

/**
 * Class ExampleTest
 */
class ExampleTest extends IntegrationTestCase
{
    public function testSomething(): void
    {
        $this->assertDatabaseMissing('users', [
            'name' => 'missing'
        ]);
    }
}
