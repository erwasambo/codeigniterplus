<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \DxChronicles;
use \DxChroniclePhoto;
use \DxChronicleComment;
use \DxChronicleCategory;

/**
 * manipulates data and contains data access logics for Enity 'Chronicle'
 *
 * @final    Chroniclemodel
 * @category models 
 * @author   Erick Wasambo
 * @link     http://africachronicles.com
 */
class Chroniclemodel extends My_DModel {

	var $entity_comment = "DxChronicleComment";
	var $table2 = "dx_chronicle_comment";

	var $entity_photo = "DxChroniclePhoto";
	var $table3 = "dx_chronicle_photo";

	function __construct()
	{
		parent::__construct();
		$this->init("DxChronicles", $this->doctrine->em);
	}

	function hasComment($id)
	{
		try {
			$chronicle = $this->em->getReference($this->entity, $id);
			$criteria = array("chronicle" => $chronicle);
			$chronicle = $this->em->getRepository($this->entity_comment)->findOneBy($criteria);
			return !empty($chronicle);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return FALSE;
		}
	}

	/**
	 * @param int $id
	 * @return DxChronicleComment
	 */
	function get_comment($id)
	{
		try {
			$chronicle = $this->em->getReference($this->entity, $id);
			$criteria = array("chronicle" => $chronicle);
			return $this->em->getRepository($this->entity_comment)->findOneBy($criteria);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return NULL;
		}
	}

	function hasPhoto($id)
	{
		try {
			$chronicle = $this->em->getReference($this->entity, $id);
			$criteria = array("chronicle" => $chronicle);
			$chronicle = $this->em->getRepository($this->entity_photo)->findOneBy($criteria);
			return !empty($chronicle);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return FALSE;
		}
	}

	/**
	 * @param int $id
	 * @return DxChroniclePhoto
	 */
	function get_photo($id)
	{
		try {
			$chronicle = $this->em->getReference($this->entity, $id);
			$criteria = array("chronicle" => $chronicle);
			return $this->em->getRepository($this->entity_photo)->findOneBy($criteria);
		} catch (Exception $err) {
			log_message("error", $err->getMessage(), false);
			return NULL;
		}
	}
}
