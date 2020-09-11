<?php
/**
 * Template Name: Registration Form
 */

if(is_user_logged_in()){
    wp_redirect( site_url() );
    exit();
}else{


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

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

 get_header();   ?>
        <div class="container">
            <div class="row">                
                <!-- Login Form -->
                <div class="col-md-4"></div>
                <div class="col-md-4 bg-dark p-4 mb-4 mt-4">

                    <?php
                        if(isset($error)) {
                            if( !empty($error)){
                                foreach( $error as $error_name){
                                    echo '<div class="alert alert-danger">'.$error_name.'</div>';
                                }
                            }                        
                        }
                        
                    ?>

                    <h3 class="text-center text-white">New User Registration</h3>
                    <form method="POST">
                        <div class="form-group">                            
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" value='<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>'>
                        </div>
                        
                        <div class="form-group">                            
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value='<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>'>
                        </div>
                        
                        <div class="form-group">                            
                            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password">
                        </div>  

                        <div class="form-group">                            
                            <input type="password" name="cnf_pwd" id="cnf_pwd" class="form-control" placeholder="Re-enter Password">
                        </div>  

                        <div class="row">                                                       
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>            

                    </form>

                    <h3 class="text-center text-white mt-3 mb-3">Already Registered?</h3>
                    <p class="text-center">
                        <a href="<?php echo site_url().'/login-form';?>" class="btn btn-warning">Log in</a>
                    </p>
                   
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
           

      <?php
get_footer();
       


}
       
