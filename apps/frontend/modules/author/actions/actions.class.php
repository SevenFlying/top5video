<?php

/**
 * author actions.
 *
 * @package    top5video
 * @subpackage author
 * @author     Your name here
 */
class authorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Authors = AuthorPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Author = AuthorPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Author);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AuthorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AuthorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Author = AuthorPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Author does not exist (%s).', $request->getParameter('id')));
    $this->form = new AuthorForm($Author);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Author = AuthorPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Author does not exist (%s).', $request->getParameter('id')));
    $this->form = new AuthorForm($Author);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Author = AuthorPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Author does not exist (%s).', $request->getParameter('id')));
    $Author->delete();

    $this->redirect('author/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Author = $form->save();

      $this->redirect('author/edit?id='.$Author->getId());
    }
  }
}
