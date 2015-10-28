<?php 
class PageController extends Controller {
    
    public $layout ='sidekanan';
    
    public function actionIndex(){
        $this->render('index');
    }
}