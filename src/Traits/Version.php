<?php
/**
 * Project google-recaptcha-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/05/2021
 * Time: 06:10
 */

namespace nguyenanhung\Libraries\Google\ReCAPTCHA\Traits;

/**
 * Trait Version
 *
 * @package   nguyenanhung\Libraries\Google\ReCAPTCHA\Traits
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait Version
{
    /**
     * Function getVersion
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 11:52
     */
    public function getVersion()
    {
        return self::VERSION;
    }
}
