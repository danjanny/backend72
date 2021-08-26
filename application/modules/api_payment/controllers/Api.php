<?php

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

	public function __construct() {
		parent::__construct();
	}

	public function index_get() {
		$this->response(['status' => 'ok']);
	}
}