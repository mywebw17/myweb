<?php

/**
 * @author wisard17
 * @copyright 2015
 */

class AboutController extends Controller {
    
    public $layout ='about';
    
    public function actionIndex(){
        $this->render('index');
    }
}

?>