<?php

/**
 * score module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage score
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseScoreGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'score' : 'score_'.$action;
  }
}
