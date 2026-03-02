<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\Messenger\Plugin\Application;

use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\ApplicationExtension\Dependency\Plugin\ApplicationPluginInterface;
use Spryker\Yves\Kernel\AbstractPlugin;
use Spryker\Yves\Messenger\FlashMessenger\FlashMessenger;
use Symfony\Component\HttpFoundation\Session\Session;

class FlashMessengerApplicationPlugin extends AbstractPlugin implements ApplicationPluginInterface
{
    /**
     * @var string
     */
    protected const SERVICE_FLASH_MESSENGER = 'flash_messenger';

    /**
     * @uses \Spryker\Yves\Session\Plugin\Application\SessionApplicationPlugin::SERVICE_SESSION
     *
     * @var string
     */
    protected const SERVICE_SESSION = 'session';

    public function provide(ContainerInterface $container): ContainerInterface
    {
        $container->set(static::SERVICE_FLASH_MESSENGER, function (ContainerInterface $container) {
            return new FlashMessenger($this->getSession($container)->getFlashBag());
        });

        return $container;
    }

    protected function getSession(ContainerInterface $container): Session
    {
        return $container->get(static::SERVICE_SESSION);
    }
}
