<?php
/**
 * Created by PhpStorm.
 * User: hassan
 * Date: 5/21/18
 * Time: 2:54 PM
 */

if (!function_exists('convertToJalaliDate')) {

    /**
     * @param null $gregory
     * @return \Date\Jalali
     */
    function convertToJalaliDate($gregory = null)
    {
        return (new \Date\Date($gregory))->toJalali();
    }
}
