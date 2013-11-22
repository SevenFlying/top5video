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
    $this->Videos = VideoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Video = VideoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Video);
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
