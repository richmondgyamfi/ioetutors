<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function gettotal_app(){
        $this->db->query("SELECT (SELECT COUNT(*) FROM topup_application.`applying_tutors`) AS total_ap, 
        (SELECT COUNT(*) FROM topup_application.`applying_tutors` WHERE STATUS = 0) AS new_ap,
        (SELECT COUNT(*) FROM topup_application.`applying_tutors` WHERE STATUS = 1) AS selected_ap,
        (SELECT COUNT(*) FROM topup_application.`applying_tutors` WHERE STATUS = 2) AS rejected_ap ,
        (SELECT COUNT(*) FROM topup_application.`applying_tutors` WHERE STATUS = 3) AS appointed_ap
        FROM topup_application.`applying_tutors`");

        $result = $this->db->resultSet();

        return $result;
    }

    public function gettotal_app1(){
        $this->db->query("SELECT (SELECT COUNT(*) FROM topup_application.`codeexaminers`) AS total_ap, 
        (SELECT COUNT(*) FROM topup_application.`codeexaminers` WHERE STATUS = 0) AS new_ap,
        (SELECT COUNT(*) FROM topup_application.`codeexaminers` WHERE STATUS = 1) AS selected_ap,
        (SELECT COUNT(*) FROM topup_application.`codeexaminers` WHERE STATUS = 2) AS rejected_ap ,
        (SELECT COUNT(*) FROM topup_application.`codeexaminers` WHERE STATUS = 3) AS appointed_ap
        FROM topup_application.`codeexaminers`");

        $result = $this->db->resultSet();

        return $result;
    }

    public function gettotal_courses($sid){
        $this->db->query("select distinct t4.centre_name,t3.courseid,t3.code,t3.title from topup_application.centre_prog as t1
        JOIN topup_application.`pcrel_main` as t2 on t1.majorid=t2.majorid
        JOIN topup_application.course_db as t3 on t2.courseid=t3.courseid
        JOIN topup_application.study_centres as t4 on t1.centreid=t4.centreid
        WHERE t1.centreid='$sid' ORDER BY t3.title");

        $result = $this->db->resultSet();

        return $result;
    }

    public function gettotal_centers(){
        $this->db->query("SELECT DISTINCT t4.centreid, t4.centre_name FROM topup_application.centre_prog AS t1
        JOIN topup_application.`pcrel_main` AS t2 ON t1.majorid=t2.majorid
        JOIN topup_application.course_db AS t3 ON t2.courseid=t3.courseid
        JOIN topup_application.study_centres AS t4 ON t1.centreid=t4.centreid ORDER BY t4.centre_name");

        $result = $this->db->resultSet();

        return $result;
    }

    public function getall_app(){
        $this->db->query("SELECT * FROM topup_application.`applying_tutors`");

        $result = $this->db->resultSet();

        return $result;
    }

    public function getall_app1(){
        $this->db->query("SELECT * FROM topup_application.`codeexaminers`");

        $result = $this->db->resultSet();

        return $result;
    }

    public function report_query($dda){

        $this->db->query("SELECT * FROM topup_application.`applying_tutors` WHERE status = $dda");

        $result = $this->db->resultSet();

        if ($result) {
            return $result;
        } else {
            $result = "";
            return $result;
        }

        // return $result;
    }

    public function update_App1($data){
        $this->db->query("UPDATE topup_application.`codeexaminers` 
        SET `status` = :status_app WHERE `id` = :pid");
        
        $this->db->bind(':status_app', $data['status_app']);
        $this->db->bind(':pid', $data['pid']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function check_datalog($phn){
        try {
            $itemlist = $this->db->query("SELECT *, concat(fname,' ',ifnull(mname,' '),' ',lname) as ename FROM `codeexaminers` WHERE phone_no = '$phn' and status = 1");

            $items = $this->db->single();
            return $items;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function update_App2($data){
        $this->db->query("UPDATE topup_application.`codeexaminers` 
        SET 
        examiner_type = :examiner_type,
        resident_status = :resident_status,
        course = :course,
        marking_centre = :marking_centre
        WHERE `id` = :pid");
        
        $this->db->bind(':examiner_type', $data['examiner_type']);
        $this->db->bind(':resident_status', $data['resident_status']);
        $this->db->bind(':course', $data['course']);
        $this->db->bind(':marking_centre', $data['marking_centre']);
        $this->db->bind(':pid', $data['pid']);
        // $this->db->bind(':status_app', '2');

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function report_query1($dda){

        $this->db->query("SELECT * FROM topup_application.`codeexaminers` WHERE status = $dda");

        $result = $this->db->resultSet();

        if ($result) {
            return $result;
        } else {
            $result = "";
            return $result;
        }

        // return $result;
    }

    public function update_password($pass){
        $this->db->query("UPDATE topup_application.users SET `password` = :newpassword WHERE username = :uname");

        $this->db->bind(':uname', $_SESSION['username']);
        $this->db->bind(':newpassword', $pass);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function createuser($data){
        $this->db->query("insert into users(fullname,username,password,email,role) values(:fullname,:uname,:password,:email,:role)");

        $this->db->bind(':fullname', $data['fullname']);
        $this->db->bind(':uname', $data['uname']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':role', $data['role']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function update_App($data){
        $this->db->query("UPDATE topup_application.`applying_tutors` 
        SET `status` = :status_app WHERE `id` = :pid");
        
        $this->db->bind(':status_app', $data['status_app']);
        $this->db->bind(':pid', $data['pid']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getapp_data($id){
        $this->db->query("SELECT t1.*, t2.`centre_name`, t3.title FROM topup_application.`applying_tutors` AS t1
        LEFT JOIN topup_application.`study_centres` AS t2 ON t1.`study_cen1` = t2.`centreid`
        LEFT JOIN topup_application.course_db AS t3 ON t1.`course_sel` = t3.courseid WHERE t1.id = $id");

        $result = $this->db->resultSet();

        return $result;
    }

    public function submit_App1($data){
        $this->db->query('INSERT INTO codeexaminers (
        fname,mname,lname,dob,gender,phone_no,email,curr_loc,course,program,centre,level,marked,bankname,branch,acc_name,acc_no, staffno) 
        VALUES(:fname,:mname,:lname,:dob,:gender,:phone_no,:email,:curr_loc,:course,:program,:centre,:level,:marked,:bankname,:branch,:acc_name,:acc_no, :staffno)');

        //Bind values
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':mname', $data['mname']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':phone_no', $data['phone_no']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':curr_loc', $data['curr_loc']);
        $this->db->bind(':course', $data['course']);
        $this->db->bind(':program', $data['program']);
        $this->db->bind(':centre', $data['centre']);
        $this->db->bind(':level', $data['level']);
        $this->db->bind(':marked', $data['marked']);
        $this->db->bind(':bankname', $data['bankname']);
        $this->db->bind(':branch', $data['branch']);
        $this->db->bind(':acc_name', $data['acc_name']);
        $this->db->bind(':acc_no', $data['acc_no']);
        $this->db->bind(':staffno', $data['staffno']);
        // die();
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function check_data1($phn, $email){
        $this->db->query("SELECT * FROM topup_application.`codeexaminers` WHERE phone_no = '$phn' OR email = '$email'");

        $row = $this->db->single();
        // $result = $this->db->resultSet();

        return $row;
    }

    public function check_data($phn, $email){
        $this->db->query("SELECT * FROM topup_application.`applying_tutors` WHERE phone_no = '$phn' OR email = '$email'");

        $row = $this->db->single();
        // $result = $this->db->resultSet();

        return $row;
    }

    public function gettotalcode_centers(){
        $this->db->query("SELECT * FROM code_centres ORDER BY centre_name");

        $result = $this->db->resultSet();

        return $result;
    }

    public function gettotal_prog(){
        $this->db->query("SELECT * FROM code_program ORDER BY prog_name");

        $result = $this->db->resultSet();

        return $result;
    }

    public function gettotalcode_courses(){
        $this->db->query("SELECT * FROM code_courses ORDER BY course_name");

        $result = $this->db->resultSet();

        return $result;
    }

    public function getallcode_app(){
        $this->db->query("SELECT * FROM topup_application.`codeexaminers`");

        $result = $this->db->resultSet();

        return $result;
    }

    public function submit_App($data){
        // $sql = 'INSERT INTO applying_tutors (
        //     fname,mname,lname,dob,gender,phone_no,email,curr_loc,f_degree,sec_degree_status,
        // course_sel,study_cen1,
        //     cv,f_degree_cert,f_degree_trans,sec_deg_cert,sec_degree_trans,detail_result,s_degree,
        // t_degree,
        //     t_degree_status,t_deg_cert,t_degree_trans,tb_detail_result) 
        //     VALUES(:fname,:mname,:lname,:dob,:gender,:phone_no,:email,:curr_loc,:f_degree,
        // :sec_degree_status,:course_sel,
        //     :study_cen1,:cv,:f_degree_cert,:f_degree_trans,:sec_deg_cert,:sec_degree_trans,
        //     :detail_result,:s_degree,:t_degree,:t_degree_status,:t_deg_cert,:t_degree_trans,
        // :tb_detail_result)';
        //     echo $sql;
        //     // die();
        $this->db->query('INSERT INTO applying_tutors (
        fname,mname,lname,dob,gender,phone_no,email,curr_loc,f_degree,sec_degree_status,course_sel,
        study_cen1,cv,f_degree_cert,f_degree_trans,sec_deg_cert,sec_degree_trans,detail_result,
        s_degree,t_degree,t_degree_status,t_deg_cert,t_degree_trans,tb_detail_result) 
        VALUES(:fname,:mname,:lname,:dob,:gender,:phone_no,:email,:curr_loc,:f_degree,
        :sec_degree_status,:course_sel,:study_cen1,:cv,:f_degree_cert,:f_degree_trans,:sec_deg_cert,
        :sec_degree_trans,:detail_result,:s_degree,:t_degree,:t_degree_status,:t_deg_cert,
        :t_degree_trans,:tb_detail_result)');

        //Bind values
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':mname', $data['mname']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':phone_no', $data['phone_no']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':curr_loc', $data['curr_loc']);
        $this->db->bind(':f_degree', $data['f_degree']);
        $this->db->bind(':s_degree', $data['s_degree']);
        $this->db->bind(':sec_degree_status', $data['sec_degree_status']);
        $this->db->bind(':course_sel', $data['course_sel']);
        $this->db->bind(':study_cen1', $data['study_cen1']);
        $this->db->bind(':cv', $data['cv']);
        $this->db->bind(':f_degree_cert', $data['f_degree_cert']);
        $this->db->bind(':f_degree_trans', $data['f_degree_trans']);
        $this->db->bind(':sec_deg_cert', $data['sec_deg_cert']);
        $this->db->bind(':sec_degree_trans', $data['sec_degree_trans']);
        $this->db->bind(':detail_result', $data['detail_result']);
        $this->db->bind(':t_degree', $data['t_degree']);
        $this->db->bind(':t_degree_status', $data['t_degree_status']);
        $this->db->bind(':t_deg_cert', $data['t_deg_cert']);
        $this->db->bind(':t_degree_trans', $data['t_degree_trans']);
        $this->db->bind(':tb_detail_result', $data['tb_detail_result']);
        // die();
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function register($data) {
        $this->db->query('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $sql = $this->db->query('SELECT * FROM users WHERE username = :username and status = 0');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();
        if($row){
            $hashedPassword = $row->password;

            if (password_verify($password, $hashedPassword)) {
            //     echo $row->password;
            // die();
                return $row;
            } else {
                return false;
            }
        }else{
            return false;
        }
        
    }

    public function checkuser($username) {
        $sql = $this->db->query('SELECT * FROM users WHERE username = :username and status = 0');

        //Bind value
        $this->db->bind(':username', $username);

        // $row = $this->db->single();
        // var_dump($row);
        // die();
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
