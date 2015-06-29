<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \PdContact;

/**
 * Description of mapper
 *
 * @author Rana
 */
class Mapper {

	function __construct()
	{
		$this->ci = & get_instance();
	}

	function formToMessage($input, $contact_form, $contact = NULL)
	{
		/**
		 * @var PdContact $contact
		 */
		if (empty($contact)) {
			$contact = new PdMessage();
		}

		$contact->setName($input->post($contact_form["name"]["field"]));
		$contact->setEmail($input->post($contact_form["email"]["field"]));
		$contact->setSubject($input->post($contact_form["subject"]["field"]));
		$contact->setMessage($input->post($contact_form["message"]["field"]));
		$contact->setTime(new DateTime());
		return $contact;
	}
	function formToChronicle($input, $chronicle_form, $chronicle = NULL){
		/**
		 * @var PdContact $contact
		 */
		if (empty($chronicle)) {
			$chronicle = new PdMessage();
		}

		$chronicle->setDescription($input->post($chronicle_form["description"]["field"]));
		return $chronicle;
	}
	function formToCountry($input, $country_form, $country = NULL){
		/**
		 * @var PdContact $contact
		 */
		if (empty($country)) {
			$country = new PdMessage();
		}

		$country->setDescription($input->post($country_form["name"]["field"]));
		return $country;
	}
}
