<?php
namespace Magento\Captcha\Plugin\Checkout;

class RemovePlaceOrderCaptcha
{
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array $jsLayout
    ) {
        unset(
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']
            ['children']['payment']['children']['place-order-captcha']
        );

        unset(
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']
            ['children']['payment']['children']['afterMethods']['children']['discount']['children']['captcha']
        );
        
        return $jsLayout;
    }
}
