<?php
/**
 * Created by PhpStorm.
 * User: gurui
 * Date: 2019/11/4
 * Time: 14:08
 */
class Home_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    }

    public function get_data()
    {
        $data = get_dir_file_info(APPPATH.'../static/image/home/carousel');
        $result = array_map(function ($item) {
            return array(
                'name' => $item['name'],
                'url' => '/static/image/home/carousel/'.$item['name']
            );
        }, array_values($data));
        return $result;
    }
}
