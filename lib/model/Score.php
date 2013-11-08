<?php


/**
 * Skeleton subclass for representing a row from the 'score' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 11/05/13 19:00:20
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Score extends BaseScore {
    public function setName($name) {
        parent::setName($name);
        $this->setSlug(TodoTop5Video::slugify($name));
    }
    
} // Score
