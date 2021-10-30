<?php

    class Session{

        public $user_id;
        public $rule;
        private $user_logged = false;

        public function __construct(){
            session_start();
            $this->check_login();
        }

        public function cokkei($login){
            $this->user_logged = $login;
        }

        public function user_login(){
            return $this->user_logged;
        }

        public function user($user){
            if($user){
                $this->user_id = $_SESSION['user_id'] = $user->id;
                $this->rule = $_SESSION['rule'] = $user->rule;
                $this->user_logged = true;
            }
        }

        public function logout(){

                unset($this->user_id);
                unset($this->rule);
                unset($_SESSION['user_id']);
                unset($_SESSION['rule']);
                $this->user_logged = false;
            
        }
        
        public function check_login(){
            if(isset($_SESSION['user_id']) && isset($_SESSION['rule'])){
                $this->user_id = $_SESSION['user_id'] ;
                $this->rule = $_SESSION['rule'] ;
                $this->user_logged = true;
                // echo "one";
            }else{
                // echo "tow";
                $this->logout();
            }
        }


    }

    $session = new Session();

