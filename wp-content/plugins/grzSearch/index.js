// function multipleFunc() {
//     document.getElementById("post_type").multiple = true;
//  }
$(document).ready(function(){
    var selected='';
    
    $('select').on('change', function() {
        selected=( $('select').val() );
      });
    $('.getPost').keyup(
        function() {
          var value =  $('.getPost').val();

          jQuery.ajax({
                    url: my_ajax_url.ajax_url,
                    type: "post",
                    data: {
                      action: 'affiliate_name', 
                      value: value,
                      selected:selected
                    },
                    success: function(response){
                   jQuery("#demo").html(response);
                    }
                  });
        });
  });






  