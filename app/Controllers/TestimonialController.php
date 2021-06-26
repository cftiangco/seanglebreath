<?php

namespace App\Controllers;

use App\Models\TestimonialModel;

class TestimonialController extends BaseController
{
	public function index() {
    $model = new TestimonialModel();
		$data['testimonials'] = $model->fetchAll();
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/testimonials",$data);
		echo view("templates/admin-table-footer");
	}

	public function create() {
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/testimonial-new");
		echo view("templates/admin-common-footer");
	}

	public function store() {
		$model = new TestimonialModel();
		$file = $this->request->getFile('image');
		if($file->isValid()) {
			$imgName = $file->getRandomName();
			$file->move('./upload',$imgName);
			$values['image'] = $imgName;
			$model->save($values);
			return redirect()->to("/admin/testimonials");
		}
	}

	public function delete($id) {
		$model = new TestimonialModel();
		$testimonials = $model->findOneById($id);
		if(file_exists('./upload/'.$testimonials->image)) {
			unlink('./upload/'.$testimonials->image);
			$model->delete(['id' => $id]);
			return redirect()->to('/admin/testimonials');
		}
		return redirect()->to('/admin/testimonials');
	}

}
