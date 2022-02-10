
// option toast

var option =
{
    animation: true,
    delay: 3000
}
var toastHTMLElement = document.querySelector("#liveToast");


var toastElement = new bootstrap.Toast(toastHTMLElement, option);
    



// 


$(document).ready(function(){
    update_Data();
    load_data();
    delete_Data();
    delete_product();
    update_product();
    
});

function view_data()
{
    $('.modal-backdrop').css("display", "none");
    $.ajax(
        {
            url: 'index.php?controller=admin&action=viewData',
            method: 'post',
            success: function(data)
            {
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                        
                }
            }
        }
    )
}

function delete_Data()
{
    $(document).on('click','#btn_del',function()
    {
        
        var Delete_ID = $(this).attr('data-id');
        
        var id_customer = $('#hid').val();
        $('#delete').modal('show');
        $(document).on('click','#btn_delete_record',function()
        {
  
            $.ajax(

                {   
                    url: 'index.php?controller=admin&action=delete',
                    method: 'post',
                    data:{Del_ID:Delete_ID, id_customer: id_customer},
                    success: function(data)
                    {
                        load_data(1);
                        $('#delete').modal('hide');
                        
                    }
                })
        })
    })
}


    
function load_data(page)  
{  
    $('.modal-backdrop').css("display", "none");
          $.ajax({  
            url:"index.php?controller=admin&action=pagination",  
            method:"POST",  
            data:{page:page},  
            success:function(data){ 
                
                $('#pagination').html(data);
                
            }  
        })  
}  
$(document).on('click', '.pagination_link', function(){
    
        var page = $(this).attr("id");  
        load_data(page);  
});  
function update_Data()
{
    
    $(document).on('click','#btn_update',function()
    {
        var status = $(this).attr('data-target');
        var id = $(this).attr('data-id1');
        $.ajax(
            {
                url: "index.php?controller=admin&action=update",
                method: 'post',
                data:{status: status, id: id},
                success: function(data)
                {
                    load_data();
                }
            })
        
        
    })
}

function view_product(){
    $('.modal-backdrop').css("display", "none");
    $.ajax(
        {
            url: 'index.php?controller=admin&action=viewProduct',
            method: 'post',
            success: function(data)
            {
                    
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    
                    $('#tableProduct').html(data.html);
                    
                }
            }
        }
    )
}
function delete_product()
{
    $(document).on('click','#btn_remove',function()
    {
        console.log(1);
        var Delete_ID = $(this).attr('data-id');
        
        $('#delete').modal('show');
        $(document).on('click','#btn_delete_record',function()
        {
  
            $.ajax(

                {   
                    url: 'index.php?controller=admin&action=delete_product',
                    method: 'post',
                    data:{Del_ID:Delete_ID},
                    success: function(data)
                    {
                        $('#delete').modal('hide');
                        view_product();
                    }
                }
            )
        })
    })
}
function btn_Update(){
    $(document).on('click', '#btn_update', function(){
        
        var id = $(this).data('id');
        var name = $('#'+id).children('td[data-target=name_product]').text();
        var category = $('#'+id).children('#category').val();
        var price = $('#'+id).children('td[data-target=price_product]').text();
        $('#name_product').val(name);
        $('#price_product').val(price);
        $( ".form-select" ).val(category);
        $("#idProduct").val(id);
    })
}
function update_product(){
    btn_Update();
    $('#save').click(function(){
        
        var id = $('#idProduct').val();
        var name = $('#name_product').val();
        var category = $('.form-select').val();
        var price = $('#price_product').val();
        
        $.ajax({
            
            url: "index.php?controller=admin&action=update_product",
            method: 'post',
            data: {id: id, name: name, category: category, price: price},
            success: function(data){
                
               $('#update').modal('hide');
               $('.toast-body').html('Update Successfully');
               toastElement.show();
               
               view_product();
               

                
                
                
            },
            error: function(data){
                $('.toast-body').html('Update Failed');
                toastElement.show();
            }
            
        })
    })
}

$(document).ready(function (e) {
    $("#save").on('click',(function(e) {
       var id = $('#idProduct').val();
       var image_file = $('#selectedImage').attr('src'); // getting file
       if(image_file != ''){ // check if image is selected
         $.ajax({
            
          url: "index.php?controller=admin&action=upload_file",
          type: "POST",
          data: {id: id, file:image_file},
          success: function(data){
               console.log(data);
               if(data=='error'){
                   console.log('error');
               }
           },
           error: function(e){
             console.log(e);
           }          
           });
       }else{
           $(".error_message").fadeIn(1000);
       }
    }));
});


   // Change photo
function changeImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#selectedImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}