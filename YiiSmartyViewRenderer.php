<?php
/**
 * Created by PhpStorm
 * User: lewisrm
 * Date: 23/04/2021
 * Time: 11:16 a. m.
 * FileName: YiiSmartyViewRenderer
 */

//in my proyect have the tree webroot/src/protected/vendors/smarty
//in my proyect have the tree webroot/src/protected/vendors/YiiSmartyViewRenderer

include Yii::app()->basePath . '/vendors/smarty/libs/Autoloader.php';
include Yii::app()->basePath . '/vendors/smarty/libs/bootstrap.php';
include Yii::app()->basePath . '/vendors/smarty/libs/Smarty.class.php';

class YiiSmartyViewRenderer extends CApplicationComponent implements IViewRenderer
{
    public  $fileExtension = '.tpl';
    private $_smarty;

    public function init()
    {
        parent::init();
        $this->_smarty = new Smarty();
        $this->_smarty->setTemplateDir(Yii::app()->getViewPath());
        $this->_smarty->setCompileDir(Yii::app()->getRuntimePath() . '/smarty/compiled/');
    }

    /**
     * Return or Display the view template to render.
     *
     * @param CBaseController $context the controller or widget who is rendering the view file.
     * @param string          $file the view file path
     * @param mixed           $data the data to be passed to the view
     * @param boolean         $return whether the rendering result should be returned
     * @return mixed the rendering result, or null if the rendering result is not needed.
     */
    public function renderFile($context, $file, $data, $return)
    {

        //smarty object template
        $template = $this->_smarty->createTemplate($file, null, null, $data, true);

        if ($return) {
            return $template->fetch();
        }

        $template->display();
    }
}