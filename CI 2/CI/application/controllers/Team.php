<?php

class Team extends CI_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Team_Model");
        $this->load->model("Group_Model");
    }

  
    public function index()
    {

        $items = $this->Team_Model->getAll();
        $groups = $this->Group_Model->getAll();

        $viewData = array(
            "items" => $items,
            "groups" => $groups,
        );

        $this->load->view("team", $viewData);
    }
    public function insert()
    {

        $id = $this->input->post("id");
        $team_name = $this->input->post("team_name");
        $team_group_id = $this->input->post("team_group_id");
        $team_persons = $this->input->post("team_persons");
        $team_task_desc = $this->input->post("team_task_desc");
        $message = $this->input->post("message");


        $insert = $this->Team_Model->insert(array(
            "id" => $id,
            "team_name" => $team_name,
            "team_group_id" => $team_group_id,
            "team_persons" => $team_persons,
            "team_task_desc" => $team_task_desc,

        ));

        if ($insert) {
            redirect(base_url("Team/getAll"));
        } else {
            redirect(base_url("/"));
        }
    }
    public function getAll()
    {

        $items = $this->Team_Model->getAll();
        $groups = $this->Group_Model->getAll();

        $viewData = array(
            "items" => $items,
            "groups" => $groups,
        );

        $this->load->view("table", $viewData);
    }
}
