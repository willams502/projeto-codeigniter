<?php

class Games_model extends CI_Model {
    public function index()
    {
        "SELECT * FROM tb_gammes";

        return $this->db->get("tb_games")->result_array();
    }
};

?>