<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Captcha\Helper;

/**
 * Captcha image model
 *
 * @api
 * @since 100.0.2
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Used for "name" attribute of captcha's input field
     */
    const INPUT_NAME_FIELD_VALUE = 'captcha';

    /**
     * Always show captcha
     */
    const MODE_ALWAYS = 'always';

    /**
     * Show captcha only after certain number of unsuccessful attempts
     */
    const MODE_AFTER_FAIL = 'after_fail';

    /**
     * Captcha fonts path
     */
    const XML_PATH_CAPTCHA_FONTS = 'captcha/fonts';

    /**
     * Default captcha type
     */
    const DEFAULT_CAPTCHA_TYPE = 'Zend';

    /**
     *
     */
    private $defaultModelFacory = null;

    /**
     *
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Captcha\Model\DefaultModelFactory $defaultModelFacory
    ) {
        $this->defaultModelFacory = $defaultModelFacory;
        parent::__construct($context);
    }
    /**
     *
     */
    public function getCaptcha($formId)
    {
        return $this->defaultModelFacory->create();
    }

    /**
     *
     */
    public function getConfig($key, $store = null)
    {
        return null;
    }

    /**
     *
     */
    public function getFonts()
    {
        return [];
    }

    /**
     *
     */
    public function getImgDir($website = null)
    {
        return '';
    }

    /**
     *
     */
    public function getImgUrl($website = null)
    {
        return '';
    }
}
