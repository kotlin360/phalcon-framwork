<?php
namespace App\Api\Controllers;

use Common\BaseController;

class IndexController extends BaseController
{

    public function indexAction()
    {
        $data = $this->json();
        // $data = $this->post();
        return $this->sendJson('请求成功');
    }
}