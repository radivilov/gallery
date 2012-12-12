<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template
{

    public $template = 'main';

    public function action_index()
    {

        $img = new Model_ProjImage();
        $session = Session::instance();
        $data['er'] = $session->get('error', '');
        $data['success'] = $session->get('success', '');
        $img = ORM::factory('ProjImage')->where('id', '>', '0')->order_by('id', 'ASC')->limit(12);

        foreach ($img->find_all() as $key) {
            $res[] = array("id" => $key->id, "alt" => $key->alt, "ext" => $key->ext);
        }

        $this->template->current = $res;
        $this->template->loadform = View::factory('loadform', $data);
        $session->delete('error');
        $session->delete('success');
    }
}
