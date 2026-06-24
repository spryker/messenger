<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\Messenger;

class MessengerConfig
{
    /**
     * @api
     *
     * @var string
     */
    public const SESSION_TRAY = 'SESSION_TRAY';

    /**
     * @api
     *
     * @var string
     */
    public const IN_MEMORY_TRAY = 'IN_MEMORY_TRAY';

    /**
     * @api
     *
     * @var string
     */
    public const FLASH_MESSAGES_SUCCESS = 'flash.messages.success';

    /**
     * @api
     *
     * @var string
     */
    public const FLASH_MESSAGES_ERROR = 'flash.messages.error';

    /**
     * @api
     *
     * @var string
     */
    public const FLASH_MESSAGES_INFO = 'flash.messages.info';
}
