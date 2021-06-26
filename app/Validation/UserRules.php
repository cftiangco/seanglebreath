<?php
namespace App\Validation;
use App\Models\AccountModel;

class UserRules {

  public function validateUser(string $str,string $fields, array $data) {
    $model = new AccountModel();
    $account = $model->where('email',$data['email'])->first();

    if(!$account)
      return false;

    return password_verify($data['pword'],$account['pword']);
  }
}
