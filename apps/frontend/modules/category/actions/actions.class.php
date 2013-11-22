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
    
    // El criterio de ordenacion (es decir, ordenacion por 'UploadDate', los mas recientes arriba y los mas antiguos abajo)
    // se encuentra definido en el archivo "showSuccess.php" del modulo category.
  
    }
}
