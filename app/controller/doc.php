<?php
namespace Controller
{
    class Doc extends Base
    {
        public function _run()
        {
            try{
                //throw new \Lib\Exception\Controller_Exception('test error', array(1,2,3));
                throw new \Single\SingleException('program error ');
                //exit;
            } catch (\Lib\Exception\Controller_Exception $e) {
                echo $e->getMessage();
                print_r($e->getExtra());
            } catch (\Single\SingleException $e) {
                echo $e->getMessage();
            }
            //$this->display();
            //$tihs->display('index');
        }
    }
}
