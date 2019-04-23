<?php
namespace app\index\controller;

use think\facade\Env;
use think\facade\Lang;

class Index extends \app\core\Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $lang = request()->route('lang');
        if(!empty($lang))
        {
            $lang = '/'.$lang;
        }
        else
        {
            $lang = '';
        }
        
        return $this->fetch('index',['lang'=>$lang]);
    }
    
    public function lang()
    {
        $lang = request()->route('lang');

        if(!empty($lang))
        {
            Lang::load(Env::get('app_path') . 'lang\\'.$lang.'.php');
            $this->redirect('/'.$lang.'/index/index/index');
        }
        elseif(empty($lang))
        {
            Lang::load(Env::get('app_path') . 'lang\en.php');
            $this->redirect('/index/index/index');
        }
    }
}
