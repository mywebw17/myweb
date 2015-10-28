<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CKEditor
 *
 * @author WIsard17
 * 
 */
class CKEditor extends CInputWidget{
    


    private $width = '100%';
    private $height = '400px';

    private $fontFamilies=array(
        'Arial'=>'Arial, Helvetica, sans-serif', 
        'Comic Sans MS'=>'Comic Sans MS, cursive',
        'Courier New'=>'Courier New, Courier, monospace',
        'Georgia'=>'Georgia, serif',
        'Lucida Sans Unicode'=>'Lucida Sans Unicode, Lucida Grande, sans-serif',
        'Tahoma'=>'Tahoma, Geneva, sans-serif',
        'Times New Roman'=>'Times New Roman, Times, serif',
        'Trebuchet MS'=>'Trebuchet MS, Helvetica, sans-serif',
        'Verdana'=>'Verdana, Geneva, sans-serif',
    );


    public $options=array();
	
	public function init()
	{
		$this->publishAssets();
	}
	
    public function run()
    {
		list($name,$id)=$this->resolveNameID();

		if(isset($this->htmlOptions['id']))
			$id=$this->htmlOptions['id'];
		else
			$this->htmlOptions['id']=$id;
		if(isset($this->htmlOptions['name']))
			$name=$this->htmlOptions['name'];
		else
			$this->htmlOptions['name']=$name;

		if($this->hasModel())
			echo CHtml::activeTextArea($this->model,$this->attribute,$this->htmlOptions);
		else
			echo CHtml::textArea($name,$this->value,$this->htmlOptions);
		
		$options=CJavaScript::encode($this->options);	
		Yii::app()->clientScript->registerScript($id,"
            
            CKEDITOR.replace( '$id', {
                language: 'en',
                uiColor: '#ffffff',
                toolbarGroups: [
                    {'name': 'clipboard', 'groups': ['Cut','Copy','Paste','PasteText','PasteFromWord','Undo','Redo']},
    				{'name':'basicstyles','groups':['basicstyles']},
    				{'name':'links','groups':['links']},
    				{'name':'paragraph','groups':['list','blocks']},
    				{'name':'document','groups':['mode']},
    				{'name':'insert','groups':['insert']},
    				{'name':'styles','groups':['styles']},
    				
    			],
    			// Remove the redundant buttons from toolbar groups defined above.
    			removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles'
                
            });
            
			
		");
	}
	
	protected static function publishAssets()
	{
		$assets=dirname(__FILE__).'/assets';
		$baseUrl=Yii::app()->assetManager->publish($assets);
		if(is_dir($assets)){
			
			Yii::app()->clientScript->registerScriptFile($baseUrl.'/ckeditor.js',CClientScript::POS_END);
		//	Yii::app()->clientScript->registerCssFile($baseUrl.'/jquery.cleditor.css');
		} else {
			throw new Exception('EClEditor - Error: Couldn\'t find assets to publish.');
		}
	}
}
?>
