<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 26/09/2018
 * Time: 17:33
 */

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class Page extends BaseController {

	public function index() {
		return view('page');
	}
}