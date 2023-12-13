<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Captcha\Model\Filter;

use Magento\Captcha\Api\CaptchaConfigPostProcessorInterface;

/**
 * Composite class for post processing captcha configuration
 */
class CaptchaConfigPostProcessorComposite implements CaptchaConfigPostProcessorInterface
{


    /**
     *
     */
    public function process(array $config): array
    {
        return $config;
    }
}
