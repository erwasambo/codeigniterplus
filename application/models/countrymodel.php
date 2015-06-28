<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \DxCountry;
use \DxCountryCategory;

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
		$this->init("DxCountry", $this->doctrine->em);
	}

	function hasComment($id)
	{
		try {
			$country = $this->em->getReference($this->entity, $id);
			$criteria = array("country" => $country);
			$country = $this->em->getRepository($this->entity_comment)->findOneBy($criteria);
			return !empty($country);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return FALSE;
		}
	}

	/**
	 * @param int $id
	 * @return DxCountryComment
	 */
	function get_comment($id)
	{
		try {
			$country = $this->em->getReference($this->entity, $id);
			$criteria = array("country" => $country);
			return $this->em->getRepository($this->entity_comment)->findOneBy($criteria);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return NULL;
		}
	}

	function hasPhoto($id)
	{
		try {
			$country = $this->em->getReference($this->entity, $id);
			$criteria = array("country" => $country);
			$country = $this->em->getRepository($this->entity_photo)->findOneBy($criteria);
			return !empty($country);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return FALSE;
		}
	}

	/**
	 * @param int $id
	 * @return DxCountryPhoto
	 */
	function get_photo($id)
	{
		try {
			$country = $this->em->getReference($this->entity, $id);
			$criteria = array("country" => $country);
			return $this->em->getRepository($this->entity_photo)->findOneBy($criteria);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return NULL;
		}
	}
}
