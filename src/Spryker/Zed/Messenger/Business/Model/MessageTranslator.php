<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Messenger\Business\Model;

use Symfony\Contracts\Translation\TranslatorInterface;

class MessageTranslator implements MessageTranslatorInterface
{
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $fallbackTranslator;

    /**
     * @var array<\Spryker\Zed\MessengerExtension\Dependency\Plugin\TranslationPluginInterface>
     */
    protected $translationPlugins;

    /**
     * @param array<\Spryker\Zed\MessengerExtension\Dependency\Plugin\TranslationPluginInterface> $translationPlugins
     * @param \Symfony\Contracts\Translation\TranslatorInterface $fallbackTranslator
     */
    public function __construct(array $translationPlugins, TranslatorInterface $fallbackTranslator)
    {
        $this->fallbackTranslator = $fallbackTranslator;
        $this->translationPlugins = $translationPlugins;
    }

    /**
     * @param string $keyName
     * @param array $data
     *
     * @return string
     */
    public function translate(string $keyName, array $data = []): string
    {
        foreach ($this->translationPlugins as $translationPlugin) {
            if ($translationPlugin->hasKey($keyName)) {
                return $translationPlugin->translate($keyName, $data);
            }
        }

        return $this->fallbackTranslator->trans($keyName, $data);
    }
}
