$(document).ready(function(){
    add_comment();
    insert_Data();
    load_comment();
});
// $(document).ready(function(){
//     $('#fullname, #address, #phone').on('keyup', function () {
        
//         if ($('#fullname').val() == '' || $('#address').val() == '' || $('#phone').val() == '' || $('#total').val() == 0) {
//           $('#sub').attr("disabled", "disabled");
//         }else{
//             $('#sub').removeAttr("disabled", "disabled" );
            
//         }

//     });
// })
function insert_Data()
{
   $(document).on('click','#sub',function()
   {   
        var isFullname = $('#fullname').val();
        var isAddress = $('#address').val();
        var isPhone = $('#phone').val();
        var total = $('#total').val();
        if(isFullname == "" || isAddress=="")
        {
            $('#Registration').modal('hide');
        }
        else
        {            
            $.ajax(
                {
                    url: 'index.php?controller=cart&action=addData',
                    method: 'post',
                    data:{fullname: isFullname , address: isAddress, phone: isPhone,total: total},
                    success: function(data)
                    {            
                        $('.products').css("display", "none");
                        $('.a').html('$0.00');
                        $('#Registration').modal('show');
                        $('form').trigger('reset');
                    }
                    
                })
        }
        
   })

   $(document).on('click','#btn_close',function()
   {
    
       $('form').trigger('reset');
       
   })   
}
function add_comment(){
    $('#comment_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"index.php?controller=product&action=comment",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data){
                if(data.error != ''){
                    $('#comment_form')[0].reset();
                    $('#comment_message').html(data.error);
                    $('#comment_id').val('0');
                    load_comment();
                }
            }
        })
    });
}

function load_comment(){
    var product_id = $('#product_id').val();
    $.ajax({
        url:"index.php?controller=product&action=loadComment&id=" + product_id,
        method:"POST",
        success:function(data){
            console.log(data);
            $('#display_comment').html(data);
        }
    })
}


