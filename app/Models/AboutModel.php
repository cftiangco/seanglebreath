<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model {

    protected $table = 'about';
    protected $allowedFields = ['about_image','content'];

    function fetchAll() {
      return $this->query("SELECT * FROM about")->getRow();
    }

    function findOneById($id) {
      return $this->query("SELECT * FROM about WHERE id = $id")->getRow();
    }

}
