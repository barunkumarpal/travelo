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
});