<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \DxChronicleCountry;

/**
 * manipulates data and contains data access logics for Enity 'Country'
 *
 * @final    Countrymodel
 * @category models 
 * @author   Erick Wasambo
 * @link     http://africacountry.com
 */
class Countrymodel extends My_DModel {

	function __construct(){
		parent::__construct();
		$this->init("DxChronicleCountry", $this->doctrine->em);
	}
}
