<?php
global $wpdb;


    if($_POST){      

        $username = $wpdb->escape( $_POST['username'] );
        $email = $wpdb->escape( $_POST['email'] );
        $pwd = $wpdb->escape( $_POST['pwd'] );
        $cnf_pwd = $wpdb->escape( $_POST['cnf_pwd'] );

        $error = array();

        if( strpos( $username, ' ') !== FALSE){

            $error['username_space'] = 'Username cannot hold space';

        } elseif( empty( $username)){

            $error['username_empty'] = "Username is required";

        } elseif( username_exists( $username )){

            $error['username_exists'] = "Username already exists";

        } elseif( empty( $email)){

            $error['email_empty'] = "Email is required";

        } elseif( !is_email($email)){

            $error['email_valid'] = "Email is not valid";

        } elseif( email_exists( $email )){

            $error['email_exists'] = "Email is already exists in our database";

         } elseif( empty( $pwd)){

            $error['empty_pwd'] = "Password is required";

         } elseif( strlen( $pwd) <= 7 ){

            $error['empty_pwd'] = "Password length is too short";
         }
        elseif( strcmp( $pwd, $cnf_pwd ) !== 0 ){

            $error['pwd_not_match'] = "Password doesn't match!";

        } else{

           $create_user = wp_create_user( $username, $pwd, $email );

            if( $create_user ){
                echo "<script>alert('Registration Successful!')</script>";
               echo "<script>window.location = '".site_url()."/login-form'</script>";
            }
        }        

    } 