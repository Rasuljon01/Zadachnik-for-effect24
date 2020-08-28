<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class mdl_orders extends CI_Model {

	var $table = 'orders';
	var $key_id = 'id';
    var $idUs = 'id_User';
	var $add_rules = array(
		array(
			'field' => 'username',
			'label' => 'Имя пользователя',
			'rules' => 'required|min_length[3]|max_length[60]'
		),
		array(
			'field' => 'title',
			'label' => 'E-mail',
			'rules' => 'required|min_length[3]|max_length[60]'
		),
		array(
			'field' => 'order_text',
			'label' => 'Текст задачи',
			'rules' => 'required|min_length[3]|max_length[600]'
		)
	);
	function __construct(){

		parent::__construct();

	}
	function add(){
		$this->form_validation->set_rules($this->add_rules);
		if($this->form_validation->run()){
			$memData = array(
				'id_User'=> $this->input->post('username'),
				'title' => $this->input->post('title'),
				'order_text' => $this->input->post('order_text')
			);
			$this->db->insert($this->table, $memData);
			if($this->isUserLoggedIn) {
				return $this->db->insert_id();
			}
		}
		else{
			return FALSE;
		}
	}
	function edit($id){
		$this->form_validation->set_rules($this->add_rules);
		if($this->form_validation->run()){
			$memData = array(
				'id_User'=> $this->input->post('username'),
				'title' => $this->input->post('title'),
				'order_text' => $this->input->post('order_text')
			);
			$this->db->where($this->key_id, $id);
			$this->db->update($this->table, $memData);
			redirect('list_orders');
		}
		else{
			return FALSE;
		}
	}
	function del($id){
		$this->db->where($this->key_id, $id);
		$this->db->delete($this->table);
	}
	function get($id){
		$this->db->where($this->key_id, $id);
		$query = $this->db->get($this->table);
		return $query->row_array();
	}
	function get_list(){
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
}
