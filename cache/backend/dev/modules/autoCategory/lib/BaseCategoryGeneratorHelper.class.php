<?php

/**
 * category module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage category
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseCategoryGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'category' : 'category_'.$action;
  }
}
