<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model {

    protected $table = 'accounts';
    protected $allowedFields = ['last_name','first_name','email','pword','user_role','current_status'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    function fetchAll() {
      return $this->query("SELECT * FROM accounts")->getResultObject();
    }

    function findOneById($id) {
      return $this->query("SELECT * FROM accounts WHERE id = $id")->getRow();
    }

    protected function beforeInsert(array $data){
      $data = $this->passwordHash($data);
      return $data;
    }

    protected function beforeUpdate(array $data){
      return $data;
    }

    protected function passwordHash(array $data) {
      if(isset($data['data']['pword'])){
        $data['data']['pword'] = password_hash($data['data']['pword'],PASSWORD_DEFAULT);
      }
      return $data;
    }

}
