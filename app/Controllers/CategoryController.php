<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\BasicPackageModel;

class CategoryController extends BaseController
{
	public function index() {
		helper('text');
    $model = new CategoryModel();
		$data['categories'] = $model->findAll();
    echo view("templates/admin-header");
    echo view("templates/admin-topbar");
    echo view("admin/categories",$data);
    echo view("templates/admin-table-footer");
	}

  public function create() {
    if($this->request->getMethod() == "post") {
      $model = new CategoryModel();

			$values = [
					'category_name' => $this->request->getPost('category_name'),
					'category_sub_title' => $this->request->getPost('category_sub_title'),
					'category_description' => $this->request->getPost('category_description'),
					'current_status' => $this->request->getPost('current_status'),
					'has_packages' => $this->request->getPost('has_packages'),
			];

			$file = $this->request->getFile('category_image');
			if($file->isValid()) {
				$imgName = $file->getRandomName();
				$file->move('./upload',$imgName);
				$values['category_image'] = $imgName;
			} else {
				$values['category_image'] = 'default_image.jpg';
			}
			$model->save($values);
			return redirect()->to("/admin/categories");

    } else {
      echo view("templates/admin-header");
      echo view("templates/admin-topbar");
      echo view("admin/categories-new");
      echo view("templates/admin-common-footer");
    }

  }

	public function edit($id) {
		$model = new CategoryModel();
		$data['category'] = $model->findOneById($id);
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/categories-edit",$data);
		echo view("templates/admin-common-footer");
	}

	public function store($id) {
		$model = new CategoryModel();
		$category = $model->findOneById($id);
		$values = [
				'category_name' => $this->request->getVar('category_name'),
				'category_sub_title' => $this->request->getVar('category_sub_title'),
				'category_description' => $this->request->getVar('category_description'),
				'current_status' => $this->request->getVar('current_status'),
				'has_packages' => $this->request->getVar('has_packages'),
		];

		$file = $this->request->getFile('category_image');

		if($file->isValid()) {
			$imgName = $file->getRandomName();
			if(file_exists('./upload/'.$category->category_image)) {
				if($category->category_image != "default_image.jpg") {
						unlink('./upload/'.$category->category_image);
				}
				$file->move('./upload',$imgName);
			}
			$values['category_image'] = $imgName;
		}
		$model->update($id,$values);
		return redirect()->to("/admin/categories");
	}

	public function removeImg($id) {
		$model = new CategoryModel();
		$category = $model->findOneById($id);
		/* if file exists then remove/unlink file to directory */
		if(file_exists('./upload/'.$category->category_image)) {
			$model->update($id,['category_image' => 'default_image.jpg']);
			unlink('./upload/'.$category->category_image);
			return redirect()->to("/admin/categories/$id");
		}
	}

	public function delete($id) {
		$model = new CategoryModel();
		$model->delete(['id' => $id]);
		return redirect()->to('/admin/categories');
	}

}
