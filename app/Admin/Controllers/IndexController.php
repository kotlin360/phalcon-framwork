<?php
namespace App\Admin\Controllers;

use Common\BaseController;

class IndexController extends BaseController
{

    public function indexAction()
    {
        $this->view->name = 'phalcon-framwork admin';
    }
}