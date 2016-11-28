<?php
    // important * untuk application base dari halaman ini
    class Home extends MY_Controller {
        //class Dashboard extends CI_Controller{
        
        function  __construct() {
            // load application base
            parent::__construct();
            $this->Webappbase();
            $this->load->library('datetimemanipulation');
        }

        // pages
        public
        function index() {
            // template content
        $this->smarty->assign('template_content', "web/home/content.html");
        // notification
        // $arr_notify = $this->notification->get_notification();
        // $this->smarty->assign("message", $arr_notify['message'] );

    
         $this->berita_satu();
         $this->berita_dua();
         $this->berita_tiga();
         $this->berita_empat();
         $this->berita_lima();
         $this->berita_berjalan();
         
         $path = 'doc/home/foto.jpg';
         $data['judul'] = 'Website Relawan Cagub-Cawagub Agus-Sylvi';
         $data['url_detail'] = BASEURL;
         $data['image'] = $path;
         $data['deskripsi'] = '';
        $this->smarty->assign('share', $data);


        // display document
        $this->parser->parse('web/base-layout/document-home.html');


       
        }

        public function berita_satu(){
            // get data
            $this->load->model('beritamodel');
            $urutan = '2';
            $result = $this->beritamodel->get_list_berita_home($urutan);
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/berita/'.$data['id_berita']."/";
            if(is_file($path.$data['image'])){
                $result[$key]['image'] = BASEURL.$path.$data['image'];
            } else {
                $result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }
                $result[$key]['date_update'] = $this->datetimemanipulation->GetFullDateWithDay($data['date_update']);
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_kategori'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list_satu", $result);
            
        }

        public function berita_dua(){
            // get data
            $this->load->model('beritamodel');
            $urutan = '3';
            $result = $this->beritamodel->get_list_berita_home($urutan);
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/berita/'.$data['id_berita']."/";
            if(is_file($path.$data['image'])){
                $result[$key]['image'] = BASEURL.$path.$data['image'];
            } else {
                $result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }
                $result[$key]['date_update'] = $this->datetimemanipulation->GetFullDateWithDay($data['date_update']);
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_kategori'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list_dua", $result);
           
        }

        public function berita_tiga(){
            // get data
            $this->load->model('beritamodel');
            $urutan = '4';
            $result = $this->beritamodel->get_list_berita_home($urutan);
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/berita/'.$data['id_berita']."/";
            if(is_file($path.$data['image'])){
                $result[$key]['image'] = BASEURL.$path.$data['image'];
            } else {
                $result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }
                $result[$key]['date_update'] = $this->datetimemanipulation->GetFullDateWithDay($data['date_update']);
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_kategori'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list_tiga", $result);
           
        }

        public function berita_empat(){
            // get data
            $this->load->model('beritamodel');
            $urutan = '5';
            $result = $this->beritamodel->get_list_berita_home($urutan);
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/berita/'.$data['id_berita']."/";
            if(is_file($path.$data['image'])){
                $result[$key]['image'] = BASEURL.$path.$data['image'];
            } else {
                $result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }
                $result[$key]['date_update'] = $this->datetimemanipulation->GetFullDateWithDay($data['date_update']);
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_kategori'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list_empat", $result);
         
        }

        public function berita_lima(){
            // get data
            $this->load->model('beritamodel');
            $urutan = '6';
            $result = $this->beritamodel->get_list_berita_home($urutan);
            if(!empty($result)):
            foreach($result as $key=>$data):
            $path = 'doc/berita/'.$data['id_berita']."/";
            if(is_file($path.$data['image'])){
                $result[$key]['image'] = BASEURL.$path.$data['image'];
            } else {
                $result[$key]['image']= BASEURL.'doc/tmp.default.jpg';
            }
                $result[$key]['date_update'] = $this->datetimemanipulation->GetFullDateWithDay($data['date_update']);
                $result[$key]['url_detail'] = site_url('public/berita/detail/'.$data['id_kategori'].'/'.$data['id_berita'].'/'.url_title($data['judul']));
                $result[$key]['content'] = strip_tags($this->getIntroText($data['content'],100));
            endforeach;
            endif;
            $this->smarty->assign("berita_list_lima", $result);
           
        }

        

        
    }
