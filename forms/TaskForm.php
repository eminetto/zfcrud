<?php
class TaskForm extends Zend_Form
{

	public function __construct($options = null) {
		parent::__construct($options);
		$this->generate();
	}
	
	private function generate() {
		$this->setName('Post');

		$id = new Zend_Form_Element_Hidden('id');
		
		$titulo = new Zend_Form_Element_Text('title');
		$titulo->setLabel('Título')->setRequired(true)->addFilter('StripTags')->addValidator('NotEmpty');
		$texto = new Zend_Form_Element_Textarea('description'); 
		$texto->setAttrib('rows', '20'); 
		$texto->setAttrib('cols', '100'); 
		$texto->setLabel('Texto')->setRequired(true) ->addFilter('StripTags') ->addValidator('NotEmpty');
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setLabel('Adicionar');
		$this->addElements(array($id, $titulo, $texto, $submit));
		//action e method
		$this->setAction(BASE_URL.'/admin/admin/index')->setMethod('post');
	}
}