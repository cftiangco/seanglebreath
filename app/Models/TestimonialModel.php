<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model {

    protected $table = 'testimonials';
    protected $allowedFields = ['image'];

    function fetchAll() {
      return $this->query("SELECT * FROM testimonials")->getResultObject();
    }

    function findOneById($id) {
      return $this->query("SELECT * FROM testimonials WHERE id = $id")->getRow();
    }

}
