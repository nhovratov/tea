<?php

declare(strict_types=1);

namespace TTN\Tea\Tests\Functional\Controller;

use TYPO3\CMS\Extbase\Security\Cryptography\HashService;
use TYPO3\TestingFramework\Core\Functional\Framework\Frontend\InternalRequest;
use TYPO3\TestingFramework\Core\Functional\Framework\Frontend\InternalRequestContext;

/**
 * @covers \TTN\Tea\Controller\TeaFrontendEditorController
 */
final class TeaFrontendEditorControllerTest extends AbstractTest
{
    protected array $configurationToUseInTestInstance  =[
        'FE' => [
            'cacheHash' => [
                'excludedParameters' => [
                    '^tx_tea_teafrontendeditor',
                ],
            ],
        ],
    ];

    /**
     * @test
     */
    public function returnsProperHttpStatusCodeAfterCreatingNewTea(): void
    {
        $this->importCSVDataSet(__DIR__ . '/Fixtures/Database/FrontendUser.csv');
        $this->importCSVDataSet(__DIR__ . '/Fixtures/Database/ContentElementTeaFrontEndEditor.csv');

        $request = new InternalRequest();
        $request = $request->withPageId(1);
        $request = $request->withQueryParameter('tx_tea_teafrontendeditor[action]', 'create');
        $request = $request->withQueryParameter('tx_tea_teafrontendeditor[tea][title]', 'New Tea');
        $request = $request->withQueryParameter(
            'tx_tea_teafrontendeditor[__trustedProperties]',
            $this->get(HashService::class)->appendHmac(json_encode(['tea' => ['title' => 1]]))
        );
        // I guess this would be preferred, but doesn't work with older testing framework versions, maybe it works with newer ones?
        // $request = $request->withMethod('POST');
        // $request = $request->withParsedBody([
        //     'tx_tea_teafrontendeditor[tea][title]' => 'New Tea',
        // ]);

        $context = new InternalRequestContext();
        $context = $context->withFrontendUserId(1);
        $response = $this->executeFrontendRequest($request, $context);

        // die($response->getBody()->__toString());

        self::assertSame(201, $response->getStatusCode());
    }
}
