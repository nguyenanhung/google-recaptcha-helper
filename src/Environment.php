<?php
/**
 * Project google-recaptcha-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/05/2021
 * Time: 06:09
 */

namespace nguyenanhung\Libraries\Google\ReCAPTCHA;

/**
 * Interface Environment
 *
 * @package   nguyenanhung\Libraries\Google\ReCAPTCHA
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface Environment
{
    const VERSION = '1.0.0';

    /**
     * Function getVersion
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 11:06
     */
    public function getVersion();
}
