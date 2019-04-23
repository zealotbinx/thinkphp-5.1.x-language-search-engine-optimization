<?php
namespace app\member\controller;

use think\Lang;

class Member extends \app\core\Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
?>