<?php

namespace App\Controllers;

use App\Models\AccountModel;

class AccountController extends BaseController
{
	public function index() {
    $model = new AccountModel();
		$data['accounts'] = $model->fetchAll();
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/accounts",$data);
		echo view("templates/admin-table-footer");
	}

	public function login() {
		$data = [];
		helper(['form']);
		echo view("admin/login",$data);
	}

	public function goLogin() {
		$data = [];
		helper(['form']);

		if($this->request->getMethod() == 'post') {
			$rules = [
				'email' => 'required|min_length[5]|max_length[50]|valid_email',
				'pword' => 'required|min_length[8]|max_length[255]|validateUser[email,pword]'
			];

			$errors = [
				'pword' => [
					'validateUser' => 'Invalid Email or Password'
				]
			];

			if(!$this->validate($rules,$errors)) {
				$data['validation'] = $this->validator;
			} else {
				$model = new AccountModel();
				$account = $model->where('email',$this->request->getVar('email'))->first();
				$this->setAccountSession($account);
				return redirect()->to("/admin");
			}
			echo view("admin/login",$data);
		}
	}

	private function setAccountSession($account) {
		$data = [
			'id' => $account['id'],
			'email' => $account['email'],
			'first_name' => $account['first_name'],
			'last_name' => $account['last_name'],
			'user_role' => $account['user_role'],
			'isLoggedIn' => true
		];

		session()->set($data);
		return true;
	}

  public function create() {
    $data = [];
    helper(['form']);
    echo view("templates/admin-header");
    echo view("templates/admin-topbar");
    echo view("admin/account-new",$data);
    echo view("templates/admin-common-footer");
  }

  public function store() {
    $data = [];
    helper(['form']);

    if($this->request->getMethod() == 'post') {
      $rules = [
        'first_name' => 'required|min_length[3]|max_length[20]',
        'last_name' => 'required|min_length[2]|max_length[20]',
        'email' => 'required|min_length[6]|max_length[50]valid_email|is_unique[accounts.email]',
        'pword' => 'required|min_length[8]|max_length[255]',
        'confirm_password' => 'matches[pword]'
      ];

      if(!$this->validate($rules)) {
        $data['validation'] = $this->validator;
      } else {
        $model = new AccountModel();

        $values = [
          'first_name' => $this->request->getVar('first_name'),
          'last_name' => $this->request->getVar('last_name'),
          'email' => $this->request->getVar('email'),
          'pword' => $this->request->getVar('pword'),
          'user_role' => $this->request->getVar('user_role') ?? 0,
          'current_status' => $this->request->getVar('current_status') ?? 0,
        ];

        $model->save($values);
        return redirect()->to("/admin/accounts");
      }

      echo view("templates/admin-header");
      echo view("templates/admin-topbar");
      echo view("admin/account-new",$data);
      echo view("templates/admin-common-footer");
    }

  }

	public function logout() {
		session()->destroy();
		return redirect()->to("/login");
	}

}
