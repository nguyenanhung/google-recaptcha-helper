<?php
/**
 * Project google-recaptcha-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/05/2021
 * Time: 06:11
 */

namespace nguyenanhung\Libraries\Google\ReCAPTCHA;

use nguyenanhung\Libraries\Google\ReCAPTCHA\Traits\Version;

/**
 * Class BaseReCaptcha
 *
 * @package   nguyenanhung\Libraries\Google\ReCAPTCHA
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseReCaptcha implements Environment
{
    use Version;

    const ERROR_MSG = 'Vui lòng chứng minh bạn là người bằng cách chứng mình bạn là người bằng cách tick vào cái ô bạn là người ở cái ô xác nhận bạn là người ở bên trên cái nút Login. Nếu bạn không phải là người, vui lòng tìm đĩa bay và quay trở về hành tinh của mình. Người Trái Đất chúng tôi không chào đón bạn!';

    /** @var array $config */
    protected $config;

    /**
     * Function setConfig
     *
     * @param array $config
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 15:19
     */
    public function setConfig($config = array())
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Function getErrorMessage
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/05/2021 31:48
     */
    public function getErrorMessage()
    {
        return self::ERROR_MSG;
    }
}
