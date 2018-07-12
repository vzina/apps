<?php
namespace Apps\Controllers;

use Yef\Controller;

class TestController extends Controller
{
    /**
     * @path /test
     * @method get
     *
     * @return void
     */
    public function indexAction()
    {
        return $this->view('test', ["name" => __CLASS__]);
    }
}
