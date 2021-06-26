<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {

    protected $table = 'categories';
    protected $allowedFields = ['category_name','category_sub_title','category_description','category_image','current_status','has_packages'];

    public function fetchAll() {
      return $this->orderBy('created_at', 'desc')->findAll();
    }

    public function fetchAllActive() {
      return $this->query("SELECT * FROM categories WHERE current_status = 1")->getResult();
    }

    public function findOneById($id) {
      return $this->query("SELECT * FROM categories WHERE id = $id")->getRow();
    }

}
