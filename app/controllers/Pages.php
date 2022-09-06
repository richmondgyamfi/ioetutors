<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

		$this->view('application/landing', $data);
        // $this->view('admin/index', $data);
    }

    public function code_examiners() {
        $data = [
            'title' => 'Home page'
        ];

		$this->view('code_examiners/landing', $data);
    }

    public function password_reset(){
		$this->view('admin/forgot_password');
    }
    
    // public function landing_page(){
	// 	$this->view('application/landing');
    // }
    
    public function index_admin() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('admin/index', $data);
    }

    public function application_form() {
		// $total_app = $this->userModel->gettotal_courses();
		$total_cen = $this->userModel->gettotal_centers();
        $data = [
            'title' => 'Home page',
            // 'total_app' => $total_app,
            'total_cen' => $total_cen
        ];
        
        $this->view('application/index', $data);
    }

    public function admin_page() {
		$total_app = $this->userModel->gettotal_app();
        $data = [
            'title' => 'Home page',
            'total_app' => $total_app
        ];

		if(isset($_SESSION['user_id'])){
            $this->view('admin/admin_page', $data);
        }else{
            $this->view('admin/index', $data);
        }
    }

    public function all_applicants() {
		$total_app = $this->userModel->getall_app();
        $data = [
            'title' => 'Home page',
            'total_app' => $total_app
        ];

		if(isset($_SESSION['user_id'])){
            $this->view('admin/all_applicants', $data);
        }else{
            $this->view('admin/index', $data);
        }
    }

    public function report() {
        $total_app = $this->userModel->getall_app();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(!empty($_POST['degree_status'])){
                $total_srh = $this->userModel->report_query($_POST['degree_status']);
                if(!empty($total_srh)){
                    $data = [
                        'title' => 'Home page',
                        'total_app' => $total_app,
                        'total_srh' => $total_srh
                    ];
            
                    if(isset($_SESSION['user_id'])){
                        $this->view('admin/report', $data);
                    }else{
                        $this->view('admin/index', $data);
                    }
                }else{
                    $data = [
                        'title' => 'Home page',
                        'total_app' => $total_app
                    ];
            
                    if(isset($_SESSION['user_id'])){
                        $this->view('admin/report', $data);
                    }else{
                        $this->view('admin/index', $data);
                    }
                }
            }else{
                $data = [
                    'title' => 'Home page',
                    'total_app' => $total_app
                ];
        
                if(isset($_SESSION['user_id'])){
                    $this->view('admin/report', $data);
                }else{
                    $this->view('admin/index', $data);
                }
            }
        }else{
            $data = [
                'title' => 'Home page',
                'total_app' => $total_app
            ];
    
            if(isset($_SESSION['user_id'])){
                $this->view('admin/report', $data);
            }else{
                $this->view('admin/index', $data);
            }
        }
    }

    public function download(){
        
        // echo $file;
        // die();
        // echo $file;
        $urll = basename($_SERVER['REQUEST_URI']);
        // die();
        $base = explode('?', $urll);
        // $base[0];
        // $base[1];
        $file = APPROOT2."/public/images/tutor_files/".$base[1];
        // echo $base[1];
        // echo $file;
        // echo basename($file);
        // if (file_exists($file)) {
        //     echo 'pa';
        // }else{
        //     echo 'la';
        // }
        // die();
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }else{
            echo '<marquee> <h1>No file was uploaded </h1> <br>
            <p> Applicant did not upload any file or file encounted an error </p></marquee>';
            
        }
    }

    public function viewfiles($uid) {
        // echo $uid;
		$total_app = $this->userModel->getapp_data($uid);
        $data = [
            'title' => 'Home page',
            'total_app' => $total_app
        ];

		if(isset($_SESSION['user_id'])){
            $this->view('admin/viewfiles', $data);
        }else{
            $this->view('admin/index', $data);
        }
    }

}
