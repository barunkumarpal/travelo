<?php 

function process_user_login(){
    
    $output['status'] = 0; 

    if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
            // check input and
            // do my login stuff here   

            global $wpdb;

            $username = $wpdb->escape( $_POST['username'] );
            $pwd = $wpdb->escape( $_POST['password'] );

            if(isset($_POST['rememberme'])){
                $remember = $_POST['rember'];
            }  

                $login_array = array(
                    'user_login'    => $username,
                    'user_password' => $pwd,
                    'remember'      => $remember
                ); 

                $verify_user = wp_signon( $login_array, false);

                if( is_wp_error($verify_user) ){

                    $error_message = $verify_user->get_error_message();                    
                    $output['status'] = 0;
                    $output['error_message'] = "'".$error_message."'";
                   
                    wp_send_json($output);                   
                    
                }else{
                    
                    $output['status'] = 1;
                    $output['site_url'] = site_url();
                    
                    wp_send_json($output);
                   
                }

               

            } else{
                $output['status'] = 2;
                $output['empty_data'] = 'All fields are required to login, Please fill all the fields.'; 
                wp_send_json($output);
               
            }

}