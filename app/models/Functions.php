<?php

class Functions{
    private $db;
	private $file_type = ['image/jpg','image/png','image/jpeg','application/pdf'];


    public function __construct(){
        $this->db = new Database;
    }

    public function single_fileupload($staff_files){
        $files = preg_replace('/\s+/', '', $staff_files['name']);
        $tempfile = $staff_files['tmp_name'];
        $typefile = $staff_files['type'];
        $timestamp = time()+date("Z");
        $timetoday = gmdate("Ymd-His",$timestamp);
            if (in_array(!empty($typefile), $this->file_type)) {
                // var_dump($files);
                // die();
                if($tempfile != ""){
                    $newfilePath = APPROOT2."/public/images/tutor_files/".$timetoday.$files;
                    $file1 = move_uploaded_file($tempfile, $newfilePath);
                    $newfilePath = $newfilePath;
                    if($file1){
                        // echo 'ps';
                        // die();
                        return $newfilePath;
                    }
                }else{
                    $newfilePath1 = "";
                    return $newfilePath1;
                }
            }else{
                $newfilePath1 = "";
                return $newfilePath1;
            }
        return $newfilePath;
    }

    

}
    ?>