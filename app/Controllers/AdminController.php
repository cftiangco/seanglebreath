<?php

namespace App\Controllers;

use App\Models\BasicPackageModel;
use App\Models\CategoryModel;

class AdminController extends BaseController
{
	public function index() {
		echo view("templates/admin-header");
    echo view("templates/admin-topbar");
		echo view("admin/index");
		echo view("templates/admin-footer");
	}

  public function listPackages() {
		$model = new BasicPackageModel();
		$data['basicPackages'] = $model->fetchAll();
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/listpackages",$data);
		echo view("templates/admin-table-footer");
	}

	public function listPackagesNew() {
		$model = new CategoryModel();
		$data['categories'] = $model->fetchAllActive();
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/listpackagesnew",$data);
		echo view("templates/admin-common-footer");
	}

	public function listPackagesStore() {
		$model = new BasicPackageModel();
		$file = $this->request->getFile('package_image');

		if($file->isValid()) {
			$imgName = $file->getRandomName();
			$values = [
				'category_id' => $this->request->getPost('category_id') ?? 0,
				'package_name' => $this->request->getPost('package_name'),
				'package_content' => $this->request->getPost('package_content'),
				'package_image' => $imgName ?? 'default-image.jpg',
				'price' => $this->request->getPost('price'),
				'current_status' => $this->request->getPost('current_status') ?? 0,
				'show_price' => $this->request->getPost('show_price') ?? 0,
				'rates' => $this->request->getPost('rates'),
				'package_name_link' => $this->request->getPost('package_name_link') ?? NULL,
			];
			$model->save($values);
			$file->move('./upload',$imgName);
			return redirect()->to('/admin/listpackages');
		}
	}

	public function basicPackages($id) {
		$modelB = new BasicPackageModel();
		$modelC = new CategoryModel();
		$data['categories'] = $modelC->fetchAllActive();
		$data['package'] = $modelB->fetchById($id);
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/listpackagesedit",$data);
		echo view("templates/admin-common-footer");
	}

	public function basicPackage($id) {
		//return var_dump($this->request->getVar());
		$model = new BasicPackageModel();
		$package = $model->fetchById($id);
		$values = [
			'category_id' => $this->request->getVar('category_id') ?? 0,
			'package_name' => $this->request->getVar('package_name'),
			'package_content' => $this->request->getVar('package_content'),
			'price' => $this->request->getVar('price'),
			'current_status' => $this->request->getVar('current_status') ?? 0,
			'show_price' => $this->request->getVar('show_price') ?? 0,
			'rates' => $this->request->getPost('rates'),
			'package_name_link' => $this->request->getPost('package_name_link') ?? NULL,
		];

		$file = $this->request->getFile('package_image');

		if($file->isValid()) {
			$imgName = $file->getRandomName();
			/* check if current image exists then remove/unlink */
			if(file_exists('./upload/'.$package->package_image)) {
				/* remove image from directory if not equal to default image */
				if($package->package_image != "default_image.jpg") {
						unlink('./upload/'.$package->package_image);
				}
			}

			/* if file is valid or not empty then push value package_name = new value */
			$values['package_image'] = $imgName;
			$file->move('./upload',$imgName);
		}

		$model->update($id,$values);
		return redirect()->to('/admin/listpackages');
	}

	public function basicPackageImgRemove($id) {
		$model = new BasicPackageModel();
		$package = $model->fetchById($id);
		/* if file exists then remove/unlink file to directory */
		if(file_exists('./upload/'.$package->package_image)) {
			$model->update($id,['package_image' => 'default_image.jpg']);
			unlink('./upload/'.$package->package_image);
			return redirect()->to("/admin/listpackages/$id");
		}
	}

	public function basicPackageDelete($id) {
		$model = new BasicPackageModel();
		$model->delete(['id' => $id]);
		return redirect()->to('/admin/listpackages');
	}
}
