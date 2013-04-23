
<?php
class Jb_Stats_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
       // $this->getLayout()->getBlock('content')->append($this->getLayout()->createBlock('twits/helloWorld'));
        $this->renderLayout();
    }
}
?>