<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Captcha\Model;

class DefaultModel extends \Laminas\Captcha\Image implements \Magento\Captcha\Model\CaptchaInterface
{
    /**
     * Key in session for captcha code
     */
    const SESSION_WORD = 'word';

    /**
     * Min captcha lengths default value
     */
    const DEFAULT_WORD_LENGTH_FROM = 3;

    /**
     * Max captcha lengths default value
     */
    const DEFAULT_WORD_LENGTH_TO = 5;

    /**
     * @return string
     */
    public function getBlockName()
    {
        return \Magento\Captcha\Block\Captcha::class;
    }

    /**
     * Whether captcha is required to be inserted to this form
     *
     * @param null|string $login
     * @return bool
     */
    public function isRequired($login = null)
    {
        return false;
    }

    /**
     *
     */
    public function isCorrect($word)
    {
        return true;
    }

    /**
     * Log attempt
     *
     * @param string $login
     * @return $this
     */
    public function logAttempt($login)
    {
        return $this;
    }

    /**
     *
     */
    public function generate()
    {

    }
}