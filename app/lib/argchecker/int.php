<?php
/**
 * Created by PhpStorm
 * @desc: int类型校验
 * @package: int.php
 * @author: leandre <nly92@foxmail.com>
 * @copyright: copyright(2014) leandre.cn
 * @version: 14/11/3
 */
namespace Lib\Argchecker;

class Int
{
    public static function min($data, $min)
    {
        return $data > $min;
    }

    public static function max($data, $max)
    {
        return $data < $max;
    }
}