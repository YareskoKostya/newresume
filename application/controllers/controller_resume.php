<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller_resume
 *
 * @author Костя
 */
class Controller_Resume extends Controller {
    //put your code here
    function __construct() {
        //parent::__construct();
        $this->model = new Model_Resume();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('resume_view.php', 'template_view.php', $data);
    }
}
