<?php
namespace App\Controllers;
use App\Models\HomeModel;
class home extends BaseController{
    function index() {
        $model = new HomeModel;
        $names = $model->getNames();
        if($names) {
            $this->tpl->assign('names', $names);
        }
        $this->tpl->display('home/index.tpl' );
    }
}
?>