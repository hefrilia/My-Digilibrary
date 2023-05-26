<?php 
    class logout{
        public function do_logout(){
            session_start();
            session_destroy();
            header("Location: login_admin.php");
        }
    }
?>