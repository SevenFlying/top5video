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
    /* Executes show action *
    * @param sfRequest $request A request object */

    public function executeShow(sfWebRequest $request) {
    $this->category = $this->getRoute()->getObject();
    
    $criteria = new Criteria();
    $criteria->add(VideoPeer::CATEGORY_ID, $this->category->getId());  
    $criteria->addDescendingOrderByColumn(VideoPeer::UPLOAD_DATE);  
    
    $this->pager = new sfPropelPager(
        'Video', 
        sfConfig::get('app_max_videos_on_each_category') //Qué tabla estamos paginando, y cada cuantas entradas (conf. de app.yml)
    );
    $this->pager->setCriteria($criteria); // Qué criterio
    $this->pager->setPage($request->getParameter('page', 1)); // Qué página quiero ahora (parámetro page, o 1 para la primera vez)
    $this->pager->init(); // Inicializar el paginador
  
    }  
}
