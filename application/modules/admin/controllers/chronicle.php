<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chronicle extends Admin_Controller {

	/**
	 * constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("chroniclemodel");
		$this->load->library('pagination');
		$this->load->library('app/paginationlib');
		$this->load->library("app/mapper");
		$this->load->library("app/formvalidator");
		$this->load->language("chronicle");
	}

	/**
	 * Show chronicle list with pagination
	 * @return type View
	 */
	public function index($start_record = 0)
	{
		try {
			$pagingConfig = $this->paginationlib->initPagination("/admin/chronicle/index", $this->chroniclemodel->get_count());
			$this->data["pagination_helper"] = $this->pagination;
			$this->data["chronicles"] = $this->chroniclemodel->get_by_range($start_record, $pagingConfig['per_page']);

			return $this->view();
		} catch (Exception $err) {
			log_message("error", $err->getMessage());
			return show_error($err->getMessage());
		}
	}

	/**
	 * Show details page of the chronicle and saves the edited information as well
	 * @param integer $id
	 * @return view 
	 */
	public function edit($id)
	{
		try {
			$forms = $this->config->item("rules");
			$this->data["chronicle_form"] = $forms["contact"];

			if ($this->input->post("submit")) {

				if ($this->formvalidator->isValid("contact")) {
					$chronicle = $this->mapper->formToMessage($this->input, $this->data["chronicle_form"], $this->chroniclemodel->get($id));
					if ($this->chroniclemodel->save($chronicle)) {
						$this->data["status"]->chronicle = $this->lang->line('edit_success');
						$this->data["status"]->success = TRUE;
					} else {
						//@todo Valid data, but wasn't save to db
					}
				} else {
					$this->data["status"]->chronicle = validation_errors();
					$this->data["status"]->success = FALSE;
				}
			}

			$this->data["chronicle"] = $this->chroniclemodel->get($id);
			$this->data["action_url"] = base_url() . "admin/chronicle/edit/" . $id;

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
			$this->data["chronicle_form"] = $forms["contact"];

			if ($this->input->post("submit")) {
				$this->load->library('form_validation');
				$this->load->helper('form');
				$fv = $this->form_validation;
				$fv->set_rules($forms["contact"]);

				if ($fv->run()) {
					$chronicle = $this->mapper->formToMessage($this->input, $this->data["chronicle_form"]);
					if ($this->chroniclemodel->save($chronicle)) {
						$this->data["status"]->chronicle = $this->lang->line('add_success');
						$this->data["status"]->success = TRUE;
					} else {
						//@todo validated, but can't save data to db
					}
				} else {
					$this->data["status"]->chronicle = validation_errors();
					$this->data["status"]->success = FALSE;
				}
			}

			$this->data["action_url"] = base_url() . "admin/chronicle/add";
			$this->data["chronicle"] = new PdMessage();
			return $this->view();
		} catch (Exception $err) {
			log_message("error", $err->getMessage());
			return show_error($err->getMessage());
		}
	}

	/**
	 * Delete a record and redirect to chronicle list page
	 * @return view 
	 */
	public function delete()
	{
		try {
			if ($this->input->post("delete")) {
				$this->chroniclemodel->delete($this->input->post("id"));
			}

			redirect(base_url() . "admin/chronicle");
		} catch (Exception $err) {
			log_message("error", $err->getMessage());
			return show_error($err->getMessage());
		}
	}
}
