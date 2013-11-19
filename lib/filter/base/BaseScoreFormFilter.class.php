<?php

/**
 * Score filter form base class.
 *
 * @package    top5video
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseScoreFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'video_id' => new sfWidgetFormPropelChoice(array('model' => 'Video', 'add_empty' => true)),
      'stars'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'video_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Video', 'column' => 'id')),
      'stars'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('score_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Score';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'video_id' => 'ForeignKey',
      'stars'    => 'Number',
    );
  }
}
