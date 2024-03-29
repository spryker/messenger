<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Messenger\Business\Model;

use Generated\Shared\Transfer\MessageTransfer;

interface MessageTrayInterface
{
    /**
     * @var string
     */
    public const FLASH_MESSAGES_SUCCESS = 'flash.messages.success';

    /**
     * @var string
     */
    public const FLASH_MESSAGES_ERROR = 'flash.messages.error';

    /**
     * @var string
     */
    public const FLASH_MESSAGES_INFO = 'flash.messages.info';

    /**
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return void
     */
    public function addSuccessMessage(MessageTransfer $message);

    /**
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return void
     */
    public function addInfoMessage(MessageTransfer $message);

    /**
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return void
     */
    public function addErrorMessage(MessageTransfer $message);

    /**
     * @return \Generated\Shared\Transfer\FlashMessagesTransfer
     */
    public function getMessages();
}
