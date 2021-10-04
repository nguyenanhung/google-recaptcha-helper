<?php
/**
 * Project google-recaptcha-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/05/2021
 * Time: 06:15
 */

namespace nguyenanhung\Libraries\Google\ReCAPTCHA;

use ReCaptcha\ReCaptcha;

/**
 * Class ReCaptchaV2
 *
 * @package   nguyenanhung\Libraries\Google\ReCAPTCHA
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class ReCaptchaV2 extends BaseReCaptcha
{
    protected $googleRecaptchaResponseData;

    /** @var \ReCaptcha\Response $verify */
    protected $verify;

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

    /**
     * Function reCaptchaScript
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 26:57
     */
    public function reCaptchaScript()
    {
        if (isset($this->config['status']) && $this->config['status'] === true) {
            return '<script src="https://www.google.com/recaptcha/api.js"></script>';
        }

        return '';

    }

    /**
     * Function reCaptchaHtmlDiv
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 26:51
     */
    public function reCaptchaHtmlDiv()
    {
        if (isset($this->config['status']) && $this->config['status'] === true) {
            return '<div class="g-recaptcha" data-sitekey="' . $this->config['site_key'] . '"></div>';
        }

        return '';
    }

    /**
     * Function verifyReCaptcha
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 30:21
     */
    public function verifyReCaptcha()
    {
        if (isset($this->config['status']) && $this->config['status'] === true) {
            $remoteIp     = getIPAddress();
            $secret       = $this->config['secret_key']; // chính là mã secret key Google cung cấp
            $recaptcha    = new ReCaptcha($secret); // Load thư viện
            $this->verify = $recaptcha->verify($this->googleRecaptchaResponseData, $remoteIp);
        }

        return $this;
    }

    /**
     * Function verifyStatus
     *
     * @return bool
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 56:40
     */
    public function verifyStatus()
    {
        return $this->verify->isSuccess();
    }

    /**
     * Function verifyErrorCodes
     *
     * @return array
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 56:43
     */
    public function verifyErrorCodes()
    {
        return $this->verify->getErrorCodes();
    }
}
