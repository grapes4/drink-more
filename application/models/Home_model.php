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
        $page = $this->input->get('page');
        switch ($page) {
            case 'home-head':
                $urlPara = 'home/head';
                break;
            case 'home-brand':
                $urlPara = 'home/brand';
                break;
            default:
                $urlPara = $page;
        }
        $data = get_dir_file_info(APPPATH . '../static/image/' . $urlPara, true);
        $result = array_map(function ($item) use ($urlPara) {
            return array(
                'name' => $item['name'],
                'url' => '/static/image/' . $urlPara . '/' . $item['name']
            );
        }, array_values($data));
        return $result;
    }
}
