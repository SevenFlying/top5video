<?php

/**
 * score actions.
 *
 * @package    top5video
 * @subpackage score
 * @author     Your name here
 */
class scoreActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Scores = ScorePeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Score = ScorePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Score);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ScoreForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ScoreForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Score = ScorePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Score does not exist (%s).', $request->getParameter('id')));
    $this->form = new ScoreForm($Score);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Score = ScorePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Score does not exist (%s).', $request->getParameter('id')));
    $this->form = new ScoreForm($Score);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Score = ScorePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Score does not exist (%s).', $request->getParameter('id')));
    $Score->delete();

    $this->redirect('score/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Score = $form->save();

      $this->redirect('score/edit?id='.$Score->getId());
    }
  }
}
