<?php

/**
 * Video form.
 *
 * @package    top5video
 * @subpackage form
 * @author     Your name here
 */
class VideoForm extends BaseVideoForm
{
  public function configure()
  {/*
    unset(
    $this['upload_date'],
    $this['slug']
    );*/
  }
  
  /*
  public function executeNew(sfWebRequest $request)
  {
    $video = new Video();
    $this->form = new VideoForm($video);
    $schema = $this->form->getWidgetSchema();
    
    date_default_timezone_set('Europe/Madrid');
    $schema['upload_date'] = date('m/d/Y h:i:s a');
    
    $this->form->setWidgetSchema($schema);    
  }
  */
  
}
