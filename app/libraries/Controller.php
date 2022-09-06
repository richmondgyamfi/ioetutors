<?php
    //Load the model and the view
    class Controller {
        public function model($model) {
            //Require model file
            require_once APPROOT.'/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

        //Load the view (checks for the file)
        public function view($view, $data = []) {
            if (file_exists(APPROOT.'/views/' . $view . '.php')) {
                require_once APPROOT.'/views/' . $view . '.php';
            } else {
                die("View does not exists.");
            }
        }
    }
