<?php
/**
 * Project google-recaptcha-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/05/2021
 * Time: 06:28
 */

namespace nguyenanhung\Libraries\Google\ReCAPTCHA;

/**
 * Class ReCaptchaV3
 *
 * @package   nguyenanhung\Libraries\Google\ReCAPTCHA
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class ReCaptchaV3 extends BaseReCaptcha
{
    protected $googleRecaptchaResponseData;

    /**
     * Function setGoogleRecaptchaResponseData
     *
     * @param $googleRecaptchaResponseData
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 27:03
     */
    public function setGoogleRecaptchaResponseData($googleRecaptchaResponseData)
    {
        $this->googleRecaptchaResponseData = $googleRecaptchaResponseData;

        return $this;
    }
}
