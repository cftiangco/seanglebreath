<?php

namespace App\Controllers;

use App\Models\AboutModel;

class AboutController extends BaseController
{
	public function index() {
    $model = new AboutModel();
		$data['about'] = $model->fetchAll();
		echo view("templates/admin-header");
		echo view("templates/admin-topbar");
		echo view("admin/about",$data);
		echo view("templates/admin-common-footer");
	}

	public function update($id) {
			$model = new AboutModel();
			$about = $model->findOneById($id);

			$values = [
					'content' => $this->request->getVar('content'),
			];
			$file = $this->request->getFile('about_image');
			if($file->isValid()) {
				$imgName = $file->getRandomName();
				if(file_exists('./upload/'.$about->about_image)) {
					unlink('./upload/'.$about->about_image);
				}
				$file->move('./upload',$imgName);
				$values['about_image'] = $imgName;
			}

			$model->update($id,$values);
			return redirect()->to("/admin/about");
	}

}
