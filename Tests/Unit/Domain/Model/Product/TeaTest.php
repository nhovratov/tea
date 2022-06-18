<?php

declare(strict_types=1);

namespace TTN\Tea\Tests\Unit\Domain\Model\Product;

use TTN\Tea\Domain\Model\Product\Tea;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * @covers \TTN\Tea\Domain\Model\Product\Tea
 */
final class TeaTest extends UnitTestCase
{
    private Tea $subject;

    protected function setUp(): void
    {
        parent::setUp();

        // @todo: build subject
    }

    /**
     * @test
     */
    public function isAbstractEntity(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function getTitleInitiallyReturnsEmptyString(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function setTitleSetsTitle(): void
    {
        self::markTestIncomplete('Code me!');

    }

    /**
     * @test
     */
    public function getDescriptionInitiallyReturnsEmptyString(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function setDescriptionSetsDescription(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function getImageInitiallyReturnsNull(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function setImageSetsImage(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function getOwnerUidInitiallyReturnsZero(): void
    {
        self::assertSame(0, $this->subject->getOwnerUid());
    }

    /**
     * @test
     */
    public function setOwnerUidSetsOwnerUid(): void
    {
        $value = 123456;
        $this->subject->setOwnerUid($value);

        self::assertSame($value, $this->subject->getOwnerUid());
    }
}
