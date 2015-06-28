<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * manipulates data and contains data access logics for Enity 'Country'
 *
 * @final    Categorymodel
 * @category models 
 * @author   Erick Wasambo
 * @link     http://africacountry.com
 */
class Categorymodel extends My_DModel {

	function __construct(){
		parent::__construct();
		$this->init("DxChronicleCategory", $this->doctrine->em);
	}
}
