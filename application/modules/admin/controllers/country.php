<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends Admin_Controller {

	/**
	 * constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("countrymodel");
		$this->load->library('pagination');
		$this->load->library('app/paginationlib');
		$this->load->library("app/mapper");
		$this->load->library("app/formvalidator");
		$this->load->language("country");
	}

	/**
	 * Show country list with pagination
	 * @return type View
	 */
	public function index($start_record = 0)
	{
		try {
			$pagingConfig = $this->paginationlib->initPagination("/admin/country/index", $this->countrymodel->get_count());
			$this->data["pagination_helper"] = $this->pagination;
			$this->data["country"] = $this->countrymodel->get_by_range($start_record, $pagingConfig['per_page']);

			return $this->view();
		} catch (Exception $err) {
			log_message("error", $err->getMessage());
			return show_error($err->getMessage());
		}
	}

	/**
	 * Show details page of the country and saves the edited information as well
	 * @param integer $id
	 * @return view 
	 */
	public function edit($id)
	{
		try {
			$forms = $this->config->item("rules");
			$this->data["country_form"] = $forms["country"];

			if ($this->input->post("submit")) {

				if ($this->formvalidator->isValid("country")) {
					$country = $this->mapper->formToCountry($this->input, $this->data["country_form"], $this->countrymodel->get($id));
					if ($this->countrymodel->save($country)) {
						$this->data["status"]->country = $this->lang->line('edit_success');
						$this->data["status"]->success = TRUE;
					} else {
						//@todo Valid data, but wasn't save to db
					}
				} else {
					$this->data["status"]->country = validation_errors();
					$this->data["status"]->success = FALSE;
				}
			}

			$this->data["country"] = $this->countrymodel->get($id);
			$this->data["action_url"] = base_url() . "admin/country/edit/" . $id;

			return $this->view();
		} catch (Exception $err) {
			log_message("error", $err->getMessage());
			return show_error($err->getMessage());
		}
	}

	/**
	 * Sow blank details page for adding new record,
	 * process submission.
	 * @return view 
	 */
	public function add()
	{
		try {
			$forms = $this->config->item("rules");
			$this->data["country_form"] = $forms["country"];

			if ($this->input->post("submit")) {
				$this->load->library('form_validation');
				$this->load->helper('form');
				$fv = $this->form_validation;
				$fv->set_rules($forms["country"]);

				if ($fv->run()) {
					$country = $this->mapper->formToCountry($this->input, $this->data["country_form"]);
					if ($this->countrymodel->save($country)) {
						$this->data["status"]->country = $this->lang->line('add_success');
						$this->data["status"]->success = TRUE;
					} else {
						//@todo validated, but can't save data to db
					}
				} else {
					$this->data["status"]->country = validation_errors();
					$this->data["status"]->success = FALSE;
				}
			}

			$this->data["action_url"] = base_url() . "admin/country/add";
			$this->data["country"] = new PdMessage();
			return $this->view();
		} catch (Exception $err) {
			log_message("error", $err->getMessage());
			return show_error($err->getMessage());
		}
	}

	/**
	 * Delete a record and redirect to country list page
	 * @return view 
	 */
	public function delete()
	{
		try {
			if ($this->input->post("delete")) {
				$this->countrymodel->delete($this->input->post("id"));
			}

			redirect(base_url() . "admin/country");
		} catch (Exception $err) {
			log_message("error", $err->getMessage());
			return show_error($err->getMessage());
		}
	}
}
