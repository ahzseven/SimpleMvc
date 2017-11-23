<?php
/**
 * 公共控制器(核心控制器)
 * Author: Seven
 * Date: 2017/11/23 14:51
 */

require getcwd() . '/vendor/smarty/libs/Smarty.class.php';

class CommonController extends Smarty
{
    function __construct()
    {
        parent::__construct();
        $this->smarty_config();
    }

    /**
     * smarty 初始化配置
     */
    private function smarty_config()
    {
        $view_path = VIEWS_PATH . '/' . MODULE_NAME . '/' . ACTION_NAME . '/';
        $this->setTemplateDir($view_path);
        $this->setCompileDir(PROJECT_PATH . '/storage/temp/');
        $this->left_delimiter = '{{';
        $this->right_delimiter = '}}';
    }
}