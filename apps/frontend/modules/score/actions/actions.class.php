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
    /* Executes show action *
    * @param sfRequest $request A request object */

    public function executeShow(sfWebRequest $request) {
        $this->score = $this->getRoute()->getObject();
    }
}
