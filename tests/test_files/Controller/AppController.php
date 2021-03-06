<?php
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * @property \Tools\Controller\Component\CommonComponent $Common
 * @property \App\Controller\Component\RequestHandlerComponent $RequestHandler
 */
class AppController extends Controller {

	/**
	 * @var array
	 */
	public $components = ['Flash', 'RequestHandler'];

	/**
	 * @return void
	 */
	public function initialize() {
		parent::initialize();

		$this->loadComponent('Tools.Common');
	}

}
