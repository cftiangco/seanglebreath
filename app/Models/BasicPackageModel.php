<?php

namespace App\Models;

use CodeIgniter\Model;

class BasicPackageModel extends Model {

    protected $table = 'basic_packages';
    protected $allowedFields = ['package_name','package_content','package_image','price','current_status','category_id','show_price','rates','package_name_link'];

    public function fetchAll() {
      return $this->query("SELECT bp.*,c.category_name FROM basic_packages bp
            LEFT JOIN categories c ON c.id = bp.category_id AND bp.current_status = 1")->getResultArray();
    }

    public function fetchAllActive() {
      return $this->query("SELECT * FROM basic_packages WHERE current_status = 1")->getResultArray();
    }

    public function fetchById($id) {
      return $this->query("SELECT bp.*,c.category_name,c.category_sub_title FROM basic_packages bp INNER JOIN categories c ON c.id = bp.category_id WHERE bp.id = $id")->getRowObject();
    }

    public function fetchCategoryPackages($id) {
      return $this->query("SELECT * FROM basic_packages WHERE category_id = $id")->getResultObject();
    }

}
