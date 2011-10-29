<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Load extends Controller {
	
	public function action_post() {
		$session = Session::instance();
		$validate = Validation::factory($_FILES)
		->rule('image', 'Upload::valid')
		->rule('image', 'not_empty')
		->rule('image', 'Upload::type', array(':value', array('jpg', 'png', 'gif')))
		->rule('image', 'Upload::image', array(':value', array(1600, 1600)))
		->rule('image', 'Upload::size', array(':value', '1M'));
		
		if ($validate->check()) {			
			$filename = Upload::save($_FILES['image'], NULL , './', 0777);		
			
			$img = Image::factory($filename);
			$ext = substr($filename, strrpos($filename, "."));			
			$alt = Arr::get($_POST, 'alt', '');				
			$paste = new Model_ProjImage();
			$paste->ext = $ext;
			$paste->alt = $alt;
			
			if(!$idtemp = $paste->save()) {
				$session->set('error','Ошибка базы данных');
			} else {
				$tmp = './img/upload/'.$idtemp;
				$img->save($tmp.$ext);
				$img->resize(200, 150, Image::NONE);
				$img->save($tmp.'s'.$ext);
				$session->set('success','Изображение загружено!');
				unlink($filename);
			}			
			Request::initial()->redirect('');		
			
		} else {
			$this->errors = $validate->errors('load');
			$er = array_values($this->errors);
			$session->set('error',$er[0]);			
			Request::initial()->redirect('');
		}
	}

}