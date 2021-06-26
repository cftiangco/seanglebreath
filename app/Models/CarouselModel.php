<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model {

    protected $table = 'carousel';
    protected $allowedFields = ['image_order','image','main_text','sub_text','current_status'];

    function fetchAll() {
      return $this->query("SELECT * FROM carousel ORDER BY image_order")->getResultArray();
    }

    function findOneById($id) {
      return $this->query("SELECT * FROM carousel WHERE id = $id")->getRow();
    }

    function fetchAllActive() {
      return $this->query("SELECT * FROM carousel WHERE current_status = 1 ORDER BY image_order")->getResultArray();
    }

}
