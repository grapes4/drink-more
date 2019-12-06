<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('news_model');
    }

    public function getNewsContent()
    {
//        $data = $this->home_model->get_data();
//        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        $srcUrl = $this->input->get('url');
        $html = file_get_contents($srcUrl);

        $html = str_replace('data-src','src', $html);

        $html = preg_replace_callback(
            '@http[s]?://mmbiz.qpic.cn[^\s]*(jpeg|png|gif)@i',
            function ($match) {
                return "http://fuzhongchun.com/news/realImage?redirectUrl=".$match[0];
//                return "http://localhost/news/realImage?redirectUrl=".$match[0];
            },
            $html
        );

        header('content-type:text/html;charset=utf-8');
        header('HTTP/1.1 200 Ok');
        echo $html;
    }

    public function realImage() {
        $redirectUrl = urldecode($_GET["redirectUrl"]);
        if (!empty($redirectUrl)) {
            header("Content-Type:image/jpeg;text/html;charset=utf-8");
            echo file_get_contents($redirectUrl);
        }
        echo $redirectUrl;
    }
}
