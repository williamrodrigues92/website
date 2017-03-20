<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends FITO_Model {

	public function __construct () {
    $this->table = 'portfolio';
		parent::__construct();
	}

}

/* End of file Portfolio_model.php */
/* Location: ./application/models/Portfolio_model.php */