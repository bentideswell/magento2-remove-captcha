<?php
/**
 *
 */
namespace Magento\Captcha\Plugin;

use Magento\Checkout\Model\ConfigProviderInterface;

class CaptchaConfigProviderPlugin
{
    /**
     *
     */
    public function aroundGetConfig(
        ConfigProviderInterface $subject,
        \Closure $proceed
    ) {
        return [];
    }
}