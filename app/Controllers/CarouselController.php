<?php

namespace App\Controllers;

use App\Models\CarouselModel;

class CarouselController extends BaseController
{
	public function index() {
		helper('text');
    $model = new CarouselModel();
		$data['carousel'] = $model->fetchAll();
    echo view("templates/admin-header");
    echo view("templates/admin-topbar");
    echo view("admin/carousel",$data);
    echo view("templates/admin-table-footer");
	}

	public function create() {
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/carousel-new");
		echo view("templates/admin-common-footer-no-ck");
	}

	public function store() {
		$model = new CarouselModel();
		$file = $this->request->getFile('image');
		if($file->isValid()) {
			$imgName = $file->getRandomName();
			$values = [
					'image_order' => $this->request->getPost('image_order'),
					'image' => $imgName,
					'main_text' => $this->request->getPost('main_text'),
					'sub_text' => $this->request->getPost('sub_text'),
					'current_status' => $this->request->getPost('current_status') ?? 0,
			];
			$model->save($values);
			$file->move('./upload',$imgName);
			return redirect()->to("/admin/carousel");
		} else {
			echo view("templates/admin-header");
			echo view("templates/admin-topbar");
			echo view("admin/carousel-new");
			echo view("templates/admin-common-footer-no-ck");
		}
	}

	public function edit($id) {
		$model = new CarouselModel();
		$data['carousel'] = $model->findOneById($id);
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/carousel-edit",$data);
		echo view("templates/admin-common-footer-no-ck");
	}

	public function update($id) {
		$model = new CarouselModel();
		$carousel = $model->findOneById($id);

		$values = [
				'image_order' => $this->request->getPost('image_order'),
				'main_text' => $this->request->getPost('main_text'),
				'sub_text' => $this->request->getPost('sub_text'),
				'current_status' => $this->request->getPost('current_status') ?? 0,
		];
		$file = $this->request->getFile('image');
		if($file->isValid()) {
			$imgName = $file->getRandomName();
			unlink('./upload/'.$carousel->image);
			$file->move('./upload',$imgName);
			$values['image'] = $imgName;
		}

		$model->update($id,$values);
		return redirect()->to("/admin/carousel");
	}

	public function delete($id) {
		$model = new CarouselModel();
		$model->delete(['id' => $id]);
		return redirect()->to('/admin/carousel');
	}

}
