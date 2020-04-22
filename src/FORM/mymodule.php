<?php
/**
  * @file
  * Contains \Drupal\MyModule\Form\MyModuleForm
  */
namespace Drupal\My_Module\Form;
use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\FormStateInterface;
/**
  * Provide an input form.
  */
class MyModuleForm extends FormBase {
  /**
    * (@inheritdoc)
    */
  public function getFormId() {
  return 'My_Module_new_form';
  }
  /**
    * (@inheritdoc)
    */
  public function buildForm(array $form, FormStateInterface $form_state){
    $list = array(0 => 'Select' , 1 => 'Article' , 2 => 'Basic page');
    $form['NODES'] = array(
      '#title' => t('Enter the number'),
      '#type' => 'number',
      '#required' => TRUE,
    );
    $form['contenttypes'] = array(
	  '#type' => 'select',
	  '#title' => t('Select the content types'),
	  '#options' => $list,
	 '#required' => TRUE,
	);
    $form['submit'] = array(
      '#type' => 'submit'
      '#value' => t('Submit'),
    );
    $form['nid'] = array(
      '#type' => 'hidden',
      '#value' => $nid,
    );
    return $form;
  }
  /**
    * (@inheritdoc)
    */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message(t('Success'));
  }
}