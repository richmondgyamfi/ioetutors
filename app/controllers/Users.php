<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
		$this->userFunctions = $this->model('Functions');
    }

    public function tutor_apply(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(empty($_POST['fname']) || empty($_POST['lname'])){
            $data1 = [
            'status' => 'error',
            'message' => 'First name and last name is required'
            ];
        }
        elseif(empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['phone_no'])){
            $data1 = [
            'status' => 'error',
            'message' => 'Date of Birth, Gender and Phone number is required'
            ];
        }
        elseif(empty($_POST['f_degree']) || empty($_POST['s_degree'])){
            $data1 = [
            'status' => 'error',
            'message' => 'First and Second Degree is required'
            ];
        }
        elseif(empty($_POST['degree_status'])){
            $data1 = [
            'status' => 'error',
            'message' => 'Select Status of Second Degree is required'
            ];
        }
        elseif(empty($_POST['course_sel']) || empty($_POST['study_cen1'])){
            $data1 = [
            'status' => 'error',
            'message' => 'Select course to teach and at least one study centre is required'
            ];
        }
        else{
            $cvfilePath = $this->userFunctions->single_fileupload($_FILES['cv']);
            $fcfilePath = $this->userFunctions->single_fileupload($_FILES['f_degree_cert']);
            $ftfilePath = $this->userFunctions->single_fileupload($_FILES['f_degree_trans']);
            $scfilePath = $this->userFunctions->single_fileupload($_FILES['sec_deg_cert']);
            $stfilePath = $this->userFunctions->single_fileupload($_FILES['sec_degree_trans']);
            $drfilePath = $this->userFunctions->single_fileupload($_FILES['detail_result']);
            $t_deg_cert = $this->userFunctions->single_fileupload($_FILES['t_deg_cert']);
            $t_degree_trans = $this->userFunctions->single_fileupload($_FILES['t_degree_trans']);
            $tb_detail_result = $this->userFunctions->single_fileupload($_FILES['tb_detail_result']);
            $checkapp = $this->userModel->check_data($_POST['phone_no'], $_POST['email']);
            // var_dump($cvfilePath);
            // die();
            if($checkapp){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Application can only be done ones'
                    ];
            }elseif(empty($cvfilePath)){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Please upload ur CV'
                    ];
            }elseif(empty($fcfilePath)){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Please upload ur First Degree Certificate'
                    ];
            }elseif(empty($ftfilePath)){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Please upload ur First Degree Transcript'
                    ];
            }elseif(($_POST['degree_status'] == 1) && (empty($scfilePath) || empty($stfilePath))){
                $data1 = [
                'status' => 'error',
                'message' => 'Upload files of Second Degree'
                ];
            }elseif(($_POST['degree_status'] == 2) && empty($drfilePath)){
                $data1 = [
                'status' => 'error',
                'message' => 'Upload details of results details'
                ];
            }else{
                if(empty($scfilePath)){$scfilePath = "";}
                if(empty($stfilePath)){$stfilePath = "";}
                if(empty($drfilePath)){$drfilePath = "";}
                $data = [
                    'fname' => trim($_POST['fname']),
                    'mname' => trim($_POST['mname']),
                    'lname' => trim($_POST['lname']),
                    'dob' => trim($_POST['dob']),
                    'gender' => trim($_POST['gender']),
                    'phone_no' => trim($_POST['phone_no']),
                    'email' => trim($_POST['email']),
                    'curr_loc' => trim($_POST['curr_loc']),
                    'f_degree' => trim($_POST['f_degree']),
                    's_degree' => trim($_POST['s_degree']),
                    'sec_degree_status' => trim($_POST['degree_status']),
                    'course_sel' => trim($_POST['course_sel']),
                    'study_cen1' => trim($_POST['study_cen1']),
                    'cv' => trim($cvfilePath),
                    'f_degree_cert' => trim($fcfilePath),
                    'f_degree_trans' => trim($ftfilePath),
                    'sec_deg_cert' => trim($scfilePath),
                    'sec_degree_trans' => trim($stfilePath),
                    'detail_result' => trim($drfilePath),
                    't_degree' => trim($_POST['t_degree']),
                    't_degree_status' => trim($_POST['t_degree_status']),
                    't_deg_cert' => trim($t_deg_cert),
                    't_degree_trans' => trim($t_degree_trans),
                    'tb_detail_result' => trim($tb_detail_result)
                ];
                $inserttut = $this->userModel->submit_App($data);
                if($inserttut){
                    $data1 = [
                    'status' => 'success',
                    'message' => 'Your application has been submitted successfully'
                    ];
                }
            }    
        }

        }
		echo json_encode($data1);

    }

    public function tut_action(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // var_dump($_POST);
            $data = [
                'status_app' => trim($_POST['radio']),
                'pid' => trim($_POST['promo_id'])
            ];
            if(empty($_POST['radio'])){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Please select or reject file'
                    ];
            }else{
                $inserttut = $this->userModel->update_App($data);
                if($inserttut){
                $data1 = [
                'status' => 'success',
                'message' => 'Application have been updated successfully'
                ];
                }else{
                $data1 = [
                'status' => 'error',
                'message' => 'Error uploading applicant'
                ];
                }            
            }
        }
		echo json_encode($data1);
    }

    public function tut_action1(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // var_dump($_POST);
            $data = [
                'status_app' => trim($_POST['radio1']),
                'pid' => trim($_POST['promo_id1'])
            ];
            if(empty($_POST['radio1'])){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Please select or reject file'
                    ];
            }else{
                $inserttut = $this->userModel->update_App($data);
                if($inserttut){
                $data1 = [
                'status' => 'success',
                'message' => 'Application have been updated successfully'
                ];
                }else{
                $data1 = [
                'status' => 'error',
                'message' => 'Error uploading applicant'
                ];
                }            
            }
        }
		echo json_encode($data1);
    }

    public function actiontut(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // var_dump($_POST);die();
            $_POST['course'] = (!empty($_POST['course'])?$_POST['course']:$_POST['promo_course']);
            $_POST['examinertype'] = (empty($_POST['examinertype'])?$_POST['promo_examiner_type']: $_POST['examinertype']);
            $_POST['res_status'] = (empty($_POST['res_status'])?$_POST['promo_resident_status']: $_POST['res_status']);
            $_POST['markcenter'] = (empty($_POST['markcenter'])?$_POST['promo_marking_centre']: $_POST['markcenter']);
            $data = [
                'examiner_type' => trim($_POST['examinertype']),
                'resident_status' => trim($_POST['res_status']),
                'marking_centre' => trim($_POST['markcenter']),
                'course' => trim($_POST['course']),
                'pid' => trim($_POST['promo_id1'])
            ];
            $inserttut = $this->userModel->update_App2($data);
            if($inserttut){
            $data1 = [
            'status' => 'success',
            'message' => 'Application have been updated successfully'
            ];
            }else{
            $data1 = [
            'status' => 'error',
            'message' => 'Error uploading applicant'
            ];
            }
        }
		echo json_encode($data1);
    }

    public function resetpassword(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // var_dump($_POST);
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            $data = [
                'old_password' => trim($_POST['old_password']),
                'new_password' => trim($_POST['new_password']),
                'repeat_password' => trim($_POST['repeat_password'])
            ];
            $checkpass =  $this->userModel->login($_SESSION['username'], $data['old_password']);
            if(!$checkpass){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Wrong current password'
                    ];
            }elseif($data['new_password'] != $data['repeat_password']){
                $data1 = [
                    'status' => 'error',
                    'message' => 'New Password Mismatch'
                    ];
            }elseif(strlen($data['new_password']) < 6){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Password must be at least 6 characters'
                    ];
            }elseif(preg_match($passwordValidation, $data['new_password'])){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Password must contain alpabets, numbers & special character'
                    ];
            }else{
                $data['new_password'] = password_hash($data['new_password'], PASSWORD_DEFAULT);
                
                $inserttut = $this->userModel->update_password($data['new_password']);
                if($inserttut){
                $data1 = [
                'status' => 'success',
                'message' => 'Your password have been changed successfully'
                ];
                }else{
                $data1 = [
                'status' => 'error',
                'message' => 'Error changing password try again'
                ];
                }            
            }
        }
		echo json_encode($data1);
    }

    public function createuser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // var_dump($_POST);
          
            // $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $data = [
                'fullname' => trim($_POST['fullname']),
                'role' => trim($_POST['role']),
                'uname' => trim($_POST['uname']),
                'password' => $password,
                'email' => trim($_POST['email'])
            ];
            $checkuser =  $this->userModel->checkuser($data['uname']);
            if(!$checkuser){
                $data1 = [
                    'status' => 'error',
                    'message' => 'Username already exit'
                    ];
            }else{
                // $data['new_password'] = password_hash($data['new_password'], PASSWORD_DEFAULT);
                
                $inserttut = $this->userModel->createuser($data);
                if($inserttut){
                $data1 = [
                'status' => 'success',
                'message' => 'User have been created successfully'
                ];
                }else{
                $data1 = [
                'status' => 'error',
                'message' => 'Error creating user try again later'
                ];
                }            
            }
        }
		echo json_encode($data1);
    }

    public function register() {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
             if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/register', $data);
    }

    public function login(){
		$data = [
			'title' => 'Login page',
			'username' => '',
			'password' => '',
			'usernameError' => '',
			'passwordError' => ''
        ];
        
		//check for post
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			//sanitize post data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data =[
				'username' => trim($_POST['username']),
				'password' => trim($_POST['password']),
				'usernameError' => '',
				'passwordError' => ''
			];

			//validate username
			if (empty($data['username'])) {
				$data['usernameError'] = 'Please enter a username.';
			}

			//validate password
			if (empty($data['password'])) {
				$data['passwordError'] = 'Please enter a password.';
            }
            

			//check id all errors are empty
			if (empty($data['usernameError']) && empty($data['passwordError'])) {
				$loggedInUser = $this->userModel->login($data['username'], $data['password']);
				if ($loggedInUser) {
					$this->createUserSession($loggedInUser);
				}else{
					$data['passwordError'] = 'Password or Username is incorrect. Please try again.';

					$this->view('admin/index', $data);
				}
			}

		}else{
			$data = [
				'username' => '',
				'password' => '',
				'usernameError' => '',
				'passwordError' => ''
			];
		}

		$this->view('admin/index', $data);
	}


    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['fullname'] = $user->fullname;
        $_SESSION['role'] = $user->role;
        $_SESSION['email'] = $user->email;
        // if(isset($_SESSION['role']) == 1 || isset($_SESSION['role']) == 2){
        //     header('location:' . URLROOT . '/code_examiners/admin_page.php');
        // }else{
            header('location:' . URLROOT . '/admin_page.php');
        // }
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        unset($_SESSION['fullname']);
        header('location:' . URLROOT . '/users/login.php');
        
    }
    public function logout1() {
        unset($_SESSION['user_id']);
        unset($_SESSION['phone_no']);
        unset($_SESSION['ename']);
        unset($_SESSION['marking_centre']);
        unset($_SESSION['resident_status']);
        unset($_SESSION['examiner_type']);
        header('location:' . URLROOT . '/code_examiners/landing.php');
        
    }
}