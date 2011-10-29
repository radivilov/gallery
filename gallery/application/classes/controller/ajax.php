<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function action_list() {
		$limit = 12;
		$id = Arr::get($_POST, 'id', '');		
		$way = Arr::get($_POST, 'way', '');
		$res='';
		$this->response->headers('Content-Type','application/json');
		
		if ($way == 1) {
			$img = ORM::factory('ProjImage')->where('id', '>', $id)->order_by('id','ASC')->limit($limit);		
			foreach ($img->find_all() as $key) {
				$res[] = array( "id" => $key->id,"alt" => $key->alt , "ext" => $key->ext);
			}
		} else if ($way == 2) {
			$img = ORM::factory('ProjImage')->where('id', '<', $id)->order_by('id','DESC')->limit($limit);
			foreach ($img->find_all() as $key) {
				$res[] = array( "id" => $key->id, "alt" => $key->alt , "ext" => $key->ext);
			}
			$res = ($res!='')? array_reverse($res):'';
		}		
		echo json_encode($res);		
	}

}
