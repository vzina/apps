<?php
namespace Apps\Controllers;

use Yef\Controller;

class IndexController extends Controller
{

    /**
     * @path /
     * @method GET
     * @async
     * @return string
     */
    public function indexAction()
    {
        // return "hello world #";
        yield $this->view('test', ['name' => 'world']);
    }

    public function TestAction()
    {
        return ['ddd', ['cccc'], 'dddd'];
    }

    /**
     * @path /test2
     * @method GET,POST
     */
    public function Test2Action()
    {
        abort_app();
        return "ddd";
    }

    /**
     * @path /taa
     *
     */
    public function taaAction()
    {
        yield 'ssss';
    }

    /**
     * @path /err
     * @return [type] [description]
     */
    public function errAction()
    {
        throw new \Exception('message');
    }
}
