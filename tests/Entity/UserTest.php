<?php
declare(strict_types=1);
namespace App\Tests\Entity;
use App\Entity\UserEntity;
use PHPUnit\Framework\TestCase;


final class UserEntityTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $this->assertInstanceOf(
            UserEntity::class,
            new UserEntity()
        );
    }

    public function testGetAndSet(): void
    {
	$user = new UserEntity();
	$user->setName("test");
        $this->assertEquals(
            'test',
            $user->getName()
        );
    }
}
