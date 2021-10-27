<?php

    class db_object{

        public function get_all(){
            $query = $this->query_pros("SELECT * FROM ".static::$table_name."");
            return $query;
        }

        public function get_user($condition){
            $query = $this->query_pros("SELECT * FROM ".static::$table_name." WHERE $condition");
            return !empty($query)?array_shift($query):false;
        }

        public function query_pros($query){
            global $config;
            $array = array();
            $query = $config->query($query);
            while($row = mysqli_fetch_assoc($query)){
              $array[] = $this->convert_vars($row);
            }
            return $array;
        }
                
        public function propertis(){

            $array = array();
            foreach(static::$column as $col) {
                $array[$col] = $this->$col;
            }
            return $array;
        }
        
        public function create(){
            global $config;
            $vars = $this->propertis();
            $query = $config->query("INSERT INTO ".static::$table_name." (".implode(',',array_keys($vars)).") VALUES ('".implode("','",array_values($vars))."')");
            if(!$query){
                echo "Error Create";
            }else{
                return $query;
            }
        }

        public function delete($condition){
            global $config;
            $query = $config->query("DELETE FROM ".static::$table_name." WHERE $condition");
            if($query){
               return true;
            }else{
               return false;
            }
        }

        public function convert_vars($row){
            $allVars = new static;
            foreach($row as $key => $value) {
                $allVars->$key = $value;
            }
            return $allVars;
        }

    }

    $db_object = new db_object();

