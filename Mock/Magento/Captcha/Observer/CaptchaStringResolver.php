<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\Captcha\Observer;

use Magento\Framework\App\RequestInterface;

class CaptchaStringResolver
{
    /**
     *
     */
    public function resolve(RequestInterface $request, $formId)
    {
        return '';
    }
}
