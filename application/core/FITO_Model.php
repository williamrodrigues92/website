<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FITO_Model extends MY_Model {

  public function __construct () {
    $this->primary_key = 'id';
    $this->timestamps  = FALSE;
    parent::__construct();
  }

  public function get_columns_null () {
    foreach($this->db->list_fields($this->table) as $field) {
      $row[$field] = NULL;
    }
    return $row;
  }

}