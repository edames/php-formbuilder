<?php
require_once('formmode.php');

class FormBuilder {
  var $mode;
  var $rule_stack;
  var $note_stack;
  var $options_stack;
  var $identifier;
  var $method;
  var $action;
  var $class;
  var $enctype;
  var $title;
	
  var $strErrorMsg;
  var $blnSubmit;
  var $errormode;
  var $isDivTag;
  var $isGroup;
	
  function FormBuilder($identifier="", $method="", $action="", $class="", $enctype="", $title="") {
    $this->mode = FormMode::Vertical;
	$this->field_stack=array();
	$this->rule_stack=array();
	$this->note_stack=array();
	$this->options_stack=array();
	$this->defaults_stack=array();
	$this->identifier=$identifier;
	$this->method=$method;
	if(!empty($action)) {
      $this->action=$action;
	} else {
      $this->action=$_SERVER['REQUEST_URI'];
	}
	if(!empty($method)) {
      $this->method=$method;
	} else {
	  $this->method="post";
	}
	$this->class=$class;
	$this->enctype=$enctype;
	$this->blnSubmit=null;
	$this->errormode="modal";
	$this->isDivTag=null;
  }
  
  function addRule($name, $rule, $message="") {}
  
  function addNote($name, $note) {}
  
  function addElement($type, $name, $label, $identifier, $attributes="", $value="", $belongto="", $isHeader=false) {}
  
  function addOptions($name, $options) {}
  
  function setDefault($name, $value) {}
  
  function setMode($mode) {}
  
  function setErrorMode($mode) {}
  
  function setDivTag($id) {}
  
  function displayValidationErrors() {}
  
  function display() {}
  
  function validate() {}
  
  function isSame($fields) {}
  
  function isSubmit() {}
  
  function create_label($name, $identifier, $label, $class="") {}
  
  function begin_label($name, $identifier, $label="", $class="") {}
  
  function end_label($label) {}
  
  function create_input($type, $name, $label, $identifier, $attributes="", $value="") {}
  
  function create_file($type, $name, $label, $identifier="", $value="") {}
  
  function create_textarea($type, $name, $label, $identifier, $attributes="") {}
  
  function create_submit($type, $name, $label, $identifier, $attributes="", $value="") {}
  
  function create_button($type, $name, $label, $identifier, $attributes="", $value="") {}
  
  function create_select($type, $name, $label, $identifier, $attributes="", $options) {}
  
  function create_checkbox($type, $name, $label, $identifier, $attributes="", $value="") {}
  
  function create_radio($type, $name, $label, $identifier, $attributes="", $value) {}
  
  function create_hidden($type, $name, $label="", $identifier, $attributes="", $value="") {}
  
  function create_note($note) {}
  
  function getValue($name) {}
  
  function createAssocForOptions($strSql="") {}
}