<?php

/**
 * Video form base class.
 *
 * @method Video getObject() Returns the current form's model object
 *
 * @package    top5video
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseVideoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'author_id'   => new sfWidgetFormPropelChoice(array('model' => 'Author', 'add_empty' => false)),
      'category_id' => new sfWidgetFormPropelChoice(array('model' => 'Category', 'add_empty' => false)),
      'title'       => new sfWidgetFormInputText(),
      'desc'        => new sfWidgetFormTextarea(),
      'upload_date' => new sfWidgetFormDate(),
      'url'         => new sfWidgetFormInputText(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'author_id'   => new sfValidatorPropelChoice(array('model' => 'Author', 'column' => 'id')),
      'category_id' => new sfValidatorPropelChoice(array('model' => 'Category', 'column' => 'id')),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'desc'        => new sfValidatorString(),
      'upload_date' => new sfValidatorDate(),
      'url'         => new sfValidatorString(array('max_length' => 255)),
      'slug'        => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Video', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('video[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Video';
  }


}
