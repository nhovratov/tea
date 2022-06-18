<?php

declare(strict_types=1);

namespace TTN\Tea\Tests\Functional\Domain\Repository\Product;

use TTN\Tea\Domain\Model\Product\Tea;
use TTN\Tea\Domain\Repository\Product\TeaRepository;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * @covers \TTN\Tea\Domain\Repository\Product\TeaRepository
 * @covers \TTN\Tea\Domain\Model\Product\Tea
 */
final class TeaRepositoryTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = ['ttn/tea'];

    private TeaRepository $subject;

    private PersistenceManagerInterface $persistenceManager;

    protected function setUp(): void
    {
        parent::setUp();

        $this->persistenceManager = $this->get(PersistenceManagerInterface::class);

        $this->subject = $this->get(TeaRepository::class);
    }

    /**
     * @test
     */
    public function findAllForNoRecordsReturnsEmptyContainer(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findAllWithRecordsFindsRecordsFromAllPages(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findAllSortsByTitleInAscendingOrder(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findByUidForInexistentRecordReturnsNull(): void
    {
        $model = $this->subject->findByUid(1);

        self::assertNull($model);
    }

    /**
     * @test
     */
    public function findByUidForExistingRecordReturnsModel(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findByUidForExistingRecordMapsAllScalarData(): void
    {
        self::markTestIncomplete('Code me!');

        // @todo: title, description
    }

    /**
     * @test
     */
    public function fillsImageRelation(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function addAndPersistAllCreatesNewRecord(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findByOwnerUidFindsTeaWithTheGivenOwnerUid(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findByOwnerUidFindsIgnoresTeaWithNonMatchingOwnerUid(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findByOwnerUidFindsIgnoresTeaWithZeroOwnerUid(): void
    {
        self::markTestIncomplete('Code me!');
    }

    /**
     * @test
     */
    public function findByOwnerUidSortsByTitleInAscendingOrder(): void
    {
        self::markTestIncomplete('Code me!');
    }
}
