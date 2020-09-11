$(document).ready(function(){
    $('#search-trip').on('submit',function(e){
        e.preventDefault(e);
        var date = $('#datepicker').val()
        var location = $('#location').val()
        // alert(location)
        // alert(date)

        var form = {
            action: 'searchtrip',
            trip_location: location,
            trip_date: date
        }

        
        $.post(theme_wp_ajax_obj.ajax_url, form, function(data){
            if(data.success == true){    
                $('.no-trip-found').removeClass('active')

                $('#up-trip-list .single_destination').remove();

                $('#up-trips').addClass('active');
                
                $('#up-trip-list').append(data.data); 

                // $('#up-trip-list .single_destination').show();               
            }else{                
                $('#up-trip-list .single_destination').remove();
                $('#up-trips').removeClass('active');
                $('.no-trip-found').addClass('active')
                console.log(data);  
               
            }
        })
    })



    // Login

    $('#login_user').on('submit', function(e){
        e.preventDefault(e);
// alert('The form is trying to submit')
        var user = $('#username').val(),
            pwd = $('#pwd').val(),
            rememberme = $('#rememberme').val()

        var form = {
            action: 'user_login',
            username: user,
            password: pwd,
            rember: rememberme
        }
        
        $.post(theme_wp_ajax_obj.ajax_url, form, function(response){
            
            if(response.status == 1 ){
                alert('Login Successful!')
            //    alert(response.site_url)
               window.location.href = response.site_url;
            }else if(response.status == 0){
                alert(response.error_message)
            }else{
                alert(response.empty_data)
            }
            
        })
    })












// Only for Footer
$('#datepicker').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {
     rightIcon: '<span class="fa fa-caret-down"></span>'
 }
});

});