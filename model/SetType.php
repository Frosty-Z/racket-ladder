<?php

class ModelSetType
{
  static function get($params)
  {
    $query = 'SELECT * FROM bad_set_type';
    
    if (isset($params['order_by']))
      $query .= ' ORDER BY '.$params['order_by'];
    
    return Database::fetchAll($query);
  }
  
  static function isSingles($id_set_type)
  {
    return in_array(intval($id_set_type), array(ID_SET_TYPE_MEN_SINGLES, ID_SET_TYPE_WOMEN_SINGLES));
  }
  static function isDoubles($id_set_type)
  {
    return !self::isSingles($id_set_type);
  }
}