<?php

namespace App\Controllers;

use App\Models\BasicPackageModel;
use App\Models\CategoryModel;
use App\Models\CarouselModel;
use App\Models\AboutModel;
use App\Models\TestimonialModel;

class HomeController extends BaseController
{
	public function index() {
		helper('text');
		//$model = new BasicPackageModel();
		$modelCategory = new CategoryModel();
		$modelCarousel = new CarouselModel();
		$modelAbout = new AboutModel();
		$modelTestimonial = new TestimonialModel();

		$data['categories'] = $modelCategory->fetchAllActive();
		$data['carousel'] = $modelCarousel->fetchAllActive();
		$data['about'] = $modelAbout->fetchAll();
		$data['testimonials'] = $modelTestimonial->fetchAll();
		$data['index'] = true;

		echo view("templates/header",$data);
		echo view("home/index",$data);
		echo view("templates/footer");
	}



	public function package($id) {
		helper('number');
		$model = new BasicPackageModel();
		$data['package'] = $model->fetchById($id);

		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->fetchAllActive();

		echo view('templates/header',$data);
		echo view('home/package',$data);
		echo view('templates/footer');
	}

	public function category($id) {
		helper(['text','number']);
		$categoryModel = new CategoryModel();
		$bPmodel = new BasicPackageModel();
		$data['packages'] = $bPmodel->fetchCategoryPackages($id);
		$data['category'] = $categoryModel->findOneById($id);
		$data['categories'] = $categoryModel->fetchAllActive();
		$data['services'] = true;

		echo view('templates/header',$data);
		echo view('home/read-more',$data);
		echo view('templates/footer');
	}

	public function services() {
		helper(['text','number']);
		$model = new CategoryModel();
		$data['categories'] = $model->fetchAllActive();

		echo view('templates/header');
		echo view('home/services',$data);
		echo view('templates/footer');
	}

	public function whyus() {
		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->fetchAllActive();
		$data['whyUsPage'] = true;

		echo view('templates/header',$data);
		echo view('home/whyus');
		echo view('templates/footer');
	}

	public function fundamentals() {
		echo view('templates/header');
		echo view('home/fundamentals');
		echo view('templates/footer');
	}

	public function freedive() {
		echo view('templates/header');
		echo view('home/freedive');
		echo view('templates/footer');
	}

	public function poolanddepth() {
		echo view('templates/header');
		echo view('home/poolanddepth');
		echo view('templates/footer');
	}

	public function about() {
		$modelAbout = new AboutModel();
		$data['about'] = $modelAbout->fetchAll();

		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->fetchAllActive();

		$data['aboutPage'] = true;

		echo view('templates/header',$data);
		echo view('home/about',$data);
		echo view('templates/footer');
	}

	public function sbHq1() {
		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->fetchAllActive();
		$data['hq'] = true;
		echo view('templates/header',$data);
		echo view('home/hb-hq1');
		echo view('templates/footer');
	}

	public function sbHq2() {
		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->fetchAllActive();
		$data['hq'] = true;
		echo view('templates/header',$data);
		echo view('home/hb-hq2');
		echo view('templates/footer');
	}

	public function sbHq3() {
		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->fetchAllActive();
		$data['hq'] = true;
		echo view('templates/header',$data);
		echo view('home/hb-hq3');
		echo view('templates/footer');
	}

	public function caheetMonte() {
		$categoryModel = new CategoryModel();
		$data['categories'] = $categoryModel->fetchAllActive();
		$data['hq'] = true;
		echo view('templates/header',$data);
		echo view('home/caheet-monte');
		echo view('templates/footer');
	}

}
