<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_resume
 *
 * @author Костя
 */
class Model_Resume extends Model {

    //put your code here
    public function get_data() {
        $query = "SELECT * FROM user_resume WHERE id = :id";
        $usresume = $this->pdo->prepare($query);
        $usresume->execute(['id' => $_POST['id']]);        
        return $usresume;
    }

}
