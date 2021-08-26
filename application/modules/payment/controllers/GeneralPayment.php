<?php

use Backend\Payment\PaymentSupport;

class GeneralPayment extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		new PaymentSupport();
	}

}