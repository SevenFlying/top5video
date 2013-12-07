<?php

/**
 * video actions.
 *
 * @package    top5video
 * @subpackage video
 * @author     Your name here
 */
class videoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {

      /*
    $criteria = new Criteria();
    $criteria->addDescendingOrderByColumn(VideoPeer::UPLOAD_DATE);
    $criteria->setLimit(sfConfig::get('app_max_videos_on_homepage'));
    $this->Videos = VideoPeer::doSelect($criteria);
    */
    /*
    $results= new Criteria();
   // $results->addSelectColumn(ScorePeer::VIDEO_ID);
    $results->addDescendingOrderByColumn(ScorePeer::STARS);
    $r->Score VideoPeer::doSelect($results);
    
    
    $c= new Criteria();
    $c->add(VideoPeer::ID, $r, CRITERIA::IN);
    $c->setLimit(sfConfig::get('app_max_videos_on_homepage'));
    $this->Videos = VideoPeer::doSelect($c);
    */
  
      /*
  select * from video where id in(
  SELECT video_id,
FROM Score
GROUP BY video_id
ORDER BY AVG( stars ) DESC )*/
  
    $this->Videos = VideoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Video = VideoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Video);
    
    //Esto es lo que se supone que hay que poner aqui para que funcione el 'pager':
    // $this->video = $this->getRoute()->getObject();
    // $criteria = new Criteria();
    // $criteria->add(VideoPeer::id, $this->video->getId());
    // $this->pager = new sfPropelPager(
    // 'Video',
    // sfConfig::get('app_max_videos_on_video') //Qué tabla estamos paginando, y cada cuantas entradas (conf. de app.yml)
    // );
    // $this->pager->setCriteria($criteria); // Qué criterio
    // $this->pager->setPage($request->getParameter('page', 1)); // Qué página quiero ahora (parámetro page, o 1 para la primera vez)
    // $this->pager->init(); // Inicializar el paginador
    
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new VideoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new VideoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Video = VideoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Video does not exist (%s).', $request->getParameter('id')));
    $this->form = new VideoForm($Video);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Video = VideoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Video does not exist (%s).', $request->getParameter('id')));
    $this->form = new VideoForm($Video);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Video = VideoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Video does not exist (%s).', $request->getParameter('id')));
    $Video->delete();

    $this->redirect('video/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Video = $form->save();

      $this->redirect('video/edit?id='.$Video->getId());
    }
  }
}
