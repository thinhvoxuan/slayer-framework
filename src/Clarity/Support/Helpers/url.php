<?php
/**
 * PhalconSlayer\Framework
 *
 * @copyright 2015-2016 Daison Carino <daison12006013@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phalconslayer.readme.io
 */

if (!function_exists('base_uri')) {

    /**
     * This returns the base uri of the current module, if passed an argument
     * it automatically appended as uri
     *
     * @param $extend_path To provide uri
     * @return string
     */
    function base_uri($extend_path = null)
    {
        return url()->getScheme().url_trimmer(
            url()->getHost().'/'.$extend_path
        );
    }
}

if (!function_exists('back')) {

    /**
     * This returns the previous request url
     *
     * @return string
     */
    function back()
    {
        return di()->get('url')->previous();
    }
}
