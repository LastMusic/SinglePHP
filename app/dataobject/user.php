<?php
/**
 * Created by PhpStorm
 * @desc: 用户数据对象 测试
 * @package: user.php
 * @author: leandre weibo.com/nly
 * @copyright: copyright(2014) leandre.cn
 * @version: 14/10/30
 */
namespace DataObject;

class User extends Do_Abstract
{
    public $fields = array(
        'id' => '',
        'name' => '',
        'sex' => '',
        'age' => ''
    );
}