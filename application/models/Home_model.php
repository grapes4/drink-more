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
        $result = null;
        if ($page == 'home') {
            $data_head = get_dir_file_info(APPPATH . '../static/image/home/head', true);
            $result['head'] = $this->handleImgData('home/head', $data_head);

            $data_brand = get_dir_file_info(APPPATH . '../static/image/home/brand', true);
            $result['brand'] = $this->handleImgData('home/brand', $data_brand)[0];

            $data_pro_list = get_dir_file_info(APPPATH . '../static/image/production/pro_list', true);
            $result['proList'] = $this->handleImgData('production/pro_list', $data_pro_list);

        } else {
            $data = get_dir_file_info(APPPATH . '../static/image/'.$page, true);
            $result = $this->handleImgData($page, $data)[0];
        }

        return $result;
    }

    private function handleImgData($param, $list) {
        $result = array_map(function ($item) use ($param) {
            return array(
                'name' => $item['name'],
                'url' => '/static/image/' . $param . '/' . $item['name']
            );
        }, array_values($list));

        return $result;
    }
}
