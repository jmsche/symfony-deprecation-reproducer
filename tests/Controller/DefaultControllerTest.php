<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class DefaultControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        self::createClient()->request('GET', '/');
        self::assertResponseIsSuccessful();
    }
}
