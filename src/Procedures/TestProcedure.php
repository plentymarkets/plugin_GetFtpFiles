<?php

namespace GetFtpFiles\Procedures;

use Plenty\Modules\Authorization\Services\AuthHelper;
use Plenty\Modules\EventProcedures\Events\EventProceduresTriggered;
use Plenty\Plugin\Log\Loggable;
use Throwable;

/**
 * Class TestProcedure
 * @package GetFtpFiles\Procedures
 */
class TestProcedure
{
    use Loggable;

    public function run(
        EventProceduresTriggered $eventTriggered
    ) {
        /** @var AuthHelper $authHelper */
        $authHelper = pluginApp(AuthHelper::class);

        return $authHelper->processUnguarded(function () use ($eventTriggered) {

            return 0;
        });
    }
}
