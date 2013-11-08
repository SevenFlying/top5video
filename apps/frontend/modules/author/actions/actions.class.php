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
    /* Executes show action *
    * @param sfRequest $request A request object */

    public function executeShow(sfWebRequest $request) {
        $this->author = $this->getRoute()->getObject();
    }
}
