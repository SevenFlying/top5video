<?php

/**
 * category actions.
 *
 * @package    top5video
 * @subpackage category
 * @author     Your name here
 */
class categoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Categorys = CategoryPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Category = CategoryPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Category = CategoryPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Category does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoryForm($Category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Category = CategoryPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Category does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoryForm($Category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Category = CategoryPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Category does not exist (%s).', $request->getParameter('id')));
    $Category->delete();

    $this->redirect('category/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Category = $form->save();

      $this->redirect('category/edit?id='.$Category->getId());
    }
  }
}
