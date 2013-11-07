<?php

/**
 * Author form base class.
 *
 * @method Author getObject() Returns the current form's model object
 *
 * @package    top5video
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAuthorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'name' => new sfWidgetFormInputText(),
      'desc' => new sfWidgetFormTextarea(),
      'slug' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name' => new sfValidatorString(array('max_length' => 255)),
      'desc' => new sfValidatorString(),
      'slug' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Author', 'column' => array('name'))),
        new sfValidatorPropelUnique(array('model' => 'Author', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('author[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Author';
  }


}
