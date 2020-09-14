<?php 
class Ft_1 extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        // $this->load->model("Materi_model");
        $this->load->model("Ft1_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }

    public function mufrodat(){
        $id = $this->session->userdata('id');
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        // kelas & program
            $data['kelas'] = [];
            $data['program'] = [];
            $kelas = $this->Admin_model->get_all("kelas_user", ["id_user" => $id]);
            foreach ($kelas as $i => $kelas) {
                $data['kelas'][$i] = $this->Admin_model->get_one("kelas", ["id_kelas" => $kelas['id_kelas']]);
                $data['program'][$i] = $data['kelas'][$i]['program'];
            }
        // kelas & program
        
        $materi = $this->Ft1_model->tema();
        $kata = $this->Ft1_model->kata();
        if(!empty($_GET['id'])){
            $i = 0;
            foreach ($kata as $kata) {
                if(MD5($kata['tema']) == $_GET['id']){
                    $data['mufrodat'][$i] = $kata;
                    $i++;
                }
            }

            foreach ($materi as $materi) {
                if(MD5($materi['tema']) == $_GET['id']){
                    $tema = $materi;
                }
            }

            
            $data['back'] = $tema['back'];
            $data['next'] = $tema['next'];

            $data['tema'] = "Full Time 1";
            $data['materi'] = $tema['tema'];
            $data['title'] = $tema['title_arab'];
            $data['latihan'] = $this->latihan_mufrodat("latihan_ft_1", $id, MD5($data['materi']));
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("ft_1/menu-mufrodat", $data);
            $this->load->view("templates/footer-user", $data);

        } elseif(!empty($_GET['latihan'])) {
            $urut = $_GET['i'];
            foreach ($kata as $i => $kata) {
                if(MD5($kata['tema']) == $_GET['latihan']){
                    if($urut == 1){
                        if($kata['status'] == "on"){
                            // $data['kata'][$i] = $kata['kata_arab'];
                            $data['mufrodat'][$i] = $kata;
                        }
                    } else {
                        $data['mufrodat'][$i] = $kata;
                    }
                }
            }

            foreach ($materi as $materi) {
                if(MD5($materi['tema']) == $_GET['latihan']){
                    $tema = $materi;
                }
            }
            
            $data['materi'] = $tema['tema'];
            $data['tema'] = "Level 1";
            $data['table'] = "latihan_ft_1";
            $data['redirect'] = "ft_1/mufrodat?id=".MD5($tema['tema']);
            
            // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['kata'][$i] = $kata['kata_arab'];
                    }
                    elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['kata'][$i] = $kata['arti'];
                    }
                    else if($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['kata'][$i] = $kata['arti'];
                    }
                }
                shuffle($data['kata']);
                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($urut == 1){
                    if($_GET['latihan'] == MD5('Murojaah')){
                        $this->load->view("latihan/murojaahmufrodat-1", $data);
                    } else {
                        $this->load->view("ft_1/latihan-mufrodat-1", $data);
                    }
                } else if($urut == 2){
                    if($_GET['latihan'] == MD5('Murojaah')){
                        $this->load->view("latihan/murojaahmufrodat-2", $data);
                    } else {
                        $this->load->view("ft_1/latihan-mufrodat-2", $data);
                    }
                } else if($urut == 3){
                    if($_GET['latihan'] == MD5('Murojaah')){
                        $this->load->view("latihan/murojaahmufrodat-3", $data);
                    } else {
                        $this->load->view("ft_1/latihan-mufrodat-3", $data);
                    }
                }
                $this->load->view("templates/footer-user", $data);
            // view

        } else {
            $data['title'] = 'Full Time 1';
            $i = 1;
            foreach ($materi as $materi) {
                $data['mufrodat'][$i] = $this->latihan("latihan_ft_1", $id, $materi['tema'], $materi['title_arab'], $materi['kata']);
                $i++;
            }
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("ft_1/index-mufrodat", $data);
            $this->load->view("templates/footer-user", $data);
            // var_dump($materi);
        }
            // var_dump($data);
    }

    // search
        public function searchForId($program, $array) {
            foreach ($array as $key => $val) {
                if ($val['program'] == $program) {
                    return $val['id_kelas'];
                }
            }
            return null;
        }
    // search

    // get
        public function tema($table, $id, $tema, $title, $title_arti, $total, $tot_latihan, $array){
            $latihan = $this->Admin_model->get_all($table, ["id_user" => $id, "tema" => $tema], "waktu", "DESC");
            if($latihan){
                $datas['mufrodat'] = COUNT($latihan) / ($tot_latihan * 3) * 100;
                $datas['tgl'] = $latihan[0]['waktu'];
            } else {
                $datas['mufrodat'] = 0;
                $datas['tgl'] = "";
            }
            
            if (in_array($title, $array))
                $datas['status'] = "on";
            else
                $datas['status'] = "off";

            $datas['title'] = $title;
            $datas['title_arti'] = $title_arti;
            $datas['count'] = $total;
            return $datas;
        }

        public function latihan($table, $id, $latihan, $title, $count){
            $data['dasar_1'] = 0;
            $latihan1 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 1"]);
            $latihan2 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 2"]);
            $latihan3 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 3"]);
            if($latihan1)
                $data['dasar_1'] ++;
            if($latihan2)
                $data['dasar_1'] ++;
            if($latihan3)
                $data['dasar_1'] ++;
            
            // tgl
                $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                rsort($tgl);
                $data['tgl'][1] = $tgl[0];
            // tgl

            $datas['mufrodat'] = $data['dasar_1'] / 3 * 100;
            $datas['tgl'] = $tgl[0];
            $datas['title'] = $title;
            $datas['latihan'] = $latihan;
            $datas['count'] = $count;
            
            return $datas;
        }

        public function latihan_mufrodat($table, $id, $materi) {
            $data[0] = $this->Admin_model->get_one($table, ["id_user" => $id, "MD5(materi)" => $materi, "latihan" => "Latihan 1"]);
            $data[1] = $this->Admin_model->get_one($table, ["id_user" => $id, "MD5(materi)" => $materi, "latihan" => "Latihan 2"]);
            $data[2] = $this->Admin_model->get_one($table, ["id_user" => $id, "MD5(materi)" => $materi, "latihan" => "Latihan 3"]);

            return $data;
        }
    // get

    // add
        public function add_latihan(){
            $id = $this->session->userdata('id');
            $redirect = $this->input->post("redirect", TRUE);
            $latihan = $this->input->post("latihan", TRUE);
            $materi = $this->input->post("materi", TRUE);
            $table = $this->input->post("table", TRUE);

            $cek = $this->Admin_model->get_one($table, ["id_user" => $id, "latihan" => $latihan, "materi" => $materi]);

            if(!$cek){
                $data = [
                    "latihan" => $latihan,
                    "id_user" => $id,
                    "materi" => $materi
                ];
                $this->Admin_model->add_data($table, $data);
            }

            redirect($redirect);
        }
}