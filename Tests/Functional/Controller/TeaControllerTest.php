<?php

declare(strict_types=1);

namespace TTN\Tea\Tests\Functional\Controller;

use TYPO3\TestingFramework\Core\Functional\Framework\Frontend\InternalRequest;

/**
 * @covers \TTN\Tea\Controller\TeaController
 */
final class TeaControllerTest extends AbstractTest
{
    /**
     * @test
     */
    public function indexActionRendersAllAvailableTeas(): void
    {
        $this->importCSVDataSet(__DIR__ . '/Fixtures/Database/ContentElementTeaIndex.csv');
        $this->importCSVDataSet(__DIR__ . '/Fixtures/Database/Teas.csv');

        $request = new InternalRequest();
        $request = $request->withPageId(1);

        $html = $this->executeFrontendRequest($request)->getBody()->__toString();

        self::assertStringContainsString('Godesberger Burgtee', $html);
        self::assertStringContainsString('Oolong', $html);
    }
}
