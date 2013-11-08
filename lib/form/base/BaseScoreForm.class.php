<?php

/**
 * Score form base class.
 *
 * @method Score getObject() Returns the current form's model object
 *
 * @package    top5video
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseScoreForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'video_id' => new sfWidgetFormPropelChoice(array('model' => 'Video', 'add_empty' => false)),
      'stars'    => new sfWidgetFormInputText(),
      'slug'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'video_id' => new sfValidatorPropelChoice(array('model' => 'Video', 'column' => 'id')),
      'stars'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'slug'     => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Score', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('score[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Score';
  }


}
