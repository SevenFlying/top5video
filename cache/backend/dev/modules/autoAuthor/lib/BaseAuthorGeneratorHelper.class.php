<?php

/**
 * author module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage author
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseAuthorGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'author' : 'author_'.$action;
  }
}
