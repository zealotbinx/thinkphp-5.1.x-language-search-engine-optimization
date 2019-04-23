<?php
namespace app\core;

use think\facade\Env;
use think\facade\Lang;

class Controller extends \think\Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $lang = request()->route('lang');
        if(!empty($lang))
        {
            Lang::load(Env::get('app_path') . 'lang\\'.$lang.'.php');
            
        }
        elseif(empty($lang))
        {
            Lang::load(Env::get('app_path') . 'lang\en.php');
        }
    }
}
?>