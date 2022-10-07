$(document).ready(function () {
    //GET PRODUCT CATEGORY FOR UPOAD
    $.ajax({
        type: "Get",
        url: "/productuploadcat",
        dataType: "json",
        contentType:"application/json",
        processData:false,
        Cache:false,
        async:true,
        success: function (response) {

            if(response.status === 200){


               // $('.name').val(response.cat);
                $.each(response.cat, function (key, category) {
                     $('#categories').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");

                });

            }

        }
    });

    //GET PRODUCT SUB_CATEGORY FOR UPOAD
    var categ;
    $('#categories').change(function (e) {
        // e.preventDefault();
        categ  =  $('#categories').val();

        $('#sub_categories').html('');
        $('#sub_categories').html('<option selected></option>');

        $.ajax({
            type: "Get",
            url: "/productuploadsubcat/"+categ,
            dataType: "json",
            contentType:"application/json",
            processData:false,
            Cache:false,
            async:true,
            success: function (response) {
                if(response.status === 200){
                    console.log(response.status);

                    $.each(response.sub_cat, function (key, sub_categ) {
                        $('#sub_categories').append("<option value='"+sub_categ.id+"'>"+sub_categ.sub_categoryname+"</option>");
                    });
                }
            }
        });

    });


     //GET PRODUCT CATEGORY FOR EDIT
     $.ajax({
        type: "Get",
        url: "/productuploadcat",
        dataType: "json",
        contentType:"application/json",
        processData:false,
        Cache:false,
        async:true,
        success: function (response) {

            if(response.status === 200){


               // $('.name').val(response.cat);
                $.each(response.cat, function (key, category) {
                     $('#editcategories').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");

                });

            }

        }
    });

    //GET PRODUCT SUB_CATEGORY FOR EDIT
    var categ;
    $('#editcategories').change(function (e) {
        // e.preventDefault();
        categ  =  $('#editcategories').val();

        $('#editsub_categories').html('');
        $('#editsub_categories').html('<option selected></option>');

        $.ajax({
            type: "Get",
            url: "/productuploadsubcat/"+categ,
            dataType: "json",
            contentType:"application/json",
            processData:false,
            Cache:false,
            async:true,
            success: function (response) {
                if(response.status === 200){
                    console.log(response.status);

                    $.each(response.sub_cat, function (key, sub_categ) {
                        $('#editsub_categories').append("<option value='"+sub_categ.id+"'>"+sub_categ.sub_categoryname+"</option>");
                    });
                }
            }
        });

    });



    //GET UPLOADED PRODUCT
    $('#example1').DataTable({
    ajax:{
        url:"/productsfetch",
        dataSrc: 'products',
    },
    responsive: true,
    paging: true,
    lengthChange: true,
    info: true,
    autoWidth: false,
    searching:true,
    scrollY:600,
    scrollX:600,
    ordering:true,
    columns:[
        { data:'productname',
            name:'productname'
        },
        { data: 'main_image',
            name:'main_image'
        },

        { data: function (row){
            return '<i class="fa fa-edit text-info" data-toggle="modal" data-target="#modal-edit-product" onclick="geteditproduct('+row.id+');" aria-hidden="true"></i>'
        },
            name: 'id'
        },
        { data: function (row){
            return '<i class="fa fa-trash text-danger"  onclick="deleteproduct('+row.id+');" aria-hidden="true"></i>'
        },
            name: 'id'
        },
        { data:'price'},
        { data:'quantity'},
        { data:'size'},
        { data:'colour'},
        { data:'condition'},
        { data:'search'},
        { data:'categories'},
        { data:'sub_categories'},


    ],
    columnDefs:
    [{
        'targets':1,
        'data':'main_image',
        'render': function(data,type,row,meta){
                return '<img src="'+ data +'" class="mx-auto rounded" height="40" width="50">'

        }
    }],
    });



    //GET ALL PRODUCT
    $('#mm').DataTable({
        ajax:{
            url:"/allproduct",
            dataSrc: 'allproduct',
        },
        responsive: true,
        paging: true,
        lengthChange: true,
        info: true,
        autoWidth: false,
        searching:true,
        scrollY:600,
        scrollX:600,
        ordering:true,
        columns:[
            { data:'productname',
             name:'productname'
            },
            { data: 'main_image',
              name:'main_image'
            },

            { data: function (row){
                    if(row.featured == 1){
                     return ' <p class="text-info text-center" style="cursor:pointer;" onclick="featured('+row.featured+','+row.id+')">featured   <i class="fa fa-plus text-info ml-2" aria-hidden="true"></i></p>'
                    }
                    else{
                        return '  <p class="text-info text-center" style="cursor:pointer;" onclick="featured('+row.featured+','+row.id+')"> <i class="fa fa-window-minimize " aria-hidden="true"></i> </p>'
                    }
            },
                name: 'featured'
            },
            { data: function (row){
                if(row.flash_sale == 1){
                 return ' <p class="text-info text-center" style="cursor:pointer;" onclick="flash('+row.flash_sale+','+row.id+')">flash sale   <i class="fa fa-bolt text-primary ml-2" aria-hidden="true"></i></p>'
                }
                else{
                    return '  <p class="text-info text-center" style="cursor:pointer;" onclick="flash('+row.flash_sale+','+row.id+')"> <i class="fa fa-window-minimize " aria-hidden="true"></i> </p>'
                }
            },
              name: 'flash_sale'
            },
            { data:'shopname'},
            { data:'price'},
            { data:'quantity'},

        ],
        columnDefs:
        [{
            'targets':1,
            'data':'main_image',
            'render': function(data,type,row,meta){
                    return '<img src="'+ data +'" class="mx-auto rounded" height="40" width="50">'

            }
        }]

    });






 });


  //GET PRODUCT TO BE EDITED
  geteditproduct();
   function geteditproduct(id){

    $.get("/geteditproduct/"+id,
    function (data) {
        if(data.status === 200){

             $('.displaimg').html('');
             $('.displaimges').html('');

            $('#productid').val(id);


            $.each(data.products, function (key, produ) {

                $('#editproductname').val(produ.productname);
                $('#editprice').val(produ.price);
                $('#editlistprice').val(produ.listprice);
                $('#editsize').val(produ.size);
                $('#editcolour').val(produ.colour);
                $('#editbrand').val(produ.brand);
                $('#editquantity').val(produ.quantity);
                $('#editcondition').val(produ.condition);
                $('#editpercentage').val(produ.percentage);
                $('#editsearch').val(produ.search);
                $('#editdescription').val(produ.description);
                $('#editspecification').val(produ.specification);
                $('.old_main_image').val(produ.main_image);
                $('.old_images').val(produ.images);

                if(produ.main_image !== ""){
                    $('#editmain_image').css('display', 'none');

                    $('.displaimg').append('<div class="card bb p-0" style="height:70px; width:70px;"><img src="'+ produ.main_image +'" class="mx-auto rounded"'
                    +' height="70" width="70"> <div class="card-body  py-3 "><p class="card-title text-danger  text-center mainimage1  mt-n3"'
                    +' onclick="deletemainimage()" id="" style="cursor:pointer;" data-image="'+produ.main_image+'" data-id="'+produ.id+'">delete</p></div></div>');
                }else{

                    $('#editmain_image').css('display', 'block');
                }

                if(produ.images !== ""){
                    $('#editimages').css('display', 'none');

                        var image = JSON.parse(produ.images);
                    $.each(image, function (key, images) {
                        //console.log(images);
                        $('.displaimges').append('<div class="card m-1 bb p-0" ><img src="'+ images +'" class="mx-auto rounded"'
                        +' height="70" width="70"> </div>');


                    });

                    $('.displaimges').append('<p class="text-danger allimages m-1" data-imagess="'+image+'"  style="cursor:pointer;" onclick="deleteimages('+produ.id+')">delete all images</p>');

                }

            });


        }
    },

);

  }


//DELETE MAIN IMAGE
function deletemainimage(){

  var id =  $('.mainimage1').attr('data-id');
  var image =  $('.mainimage1').attr('data-image');


    $.ajax({
        type: "Post",
        url: "/deletemainimage",
        data:{
            id: id,
            image:image
        },

        success: function (response) {
            if(response.status === 200){
                geteditproduct(id);
                $('#editmain_image').css('display', 'block');
                swal({
                    'title':response.message,
                    'icon': 'success',
                    'timer': 1000
                });


            }else{

                swal({
                    'title':response.message,
                    'icon': 'error',
                    'timer': 1000
                });
            }
        }
    });
}

//DELETE ALL IMAGE
 function deleteimages(imagesid){

   var id = imagesid;
   var allimage = $('.allimages').attr('data-imagess');
     console.log(allimage);

     $.ajax({
         type: "Post",
         url: "/deleteallimages",
         data:{
             id: id,
             images:allimage
         },

         success: function (response) {
             if(response.status === 200){
                 geteditproduct(id);
                 $('#editimages').css('display', 'block');

                 swal({
                     'title':response.message,
                     'icon': 'success',
                     'timer': 1000
                 });


             }else{

                 swal({
                     'title':response.message,
                     'icon': 'error',
                     'timer': 1000
                 });
             }
         }
     });


 }



 //DELETE PRODUCT
 function deleteproduct(id){

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                type: "Get",
                url: "/deleteproduct/"+id,
                success: function (response) {

                    if(response.status === 200){

                        swal({
                            'title':response.message,
                            'icon': 'success',
                            'timer': 1000
                        });


                       $('#example1').DataTable().ajax.reload();

                    }else{

                        swal({
                            'title':response.message,
                            'icon': 'error',
                            'timer': 1000
                        });
                    }
                }
            });

        }
      });




 }

 //FEATURED UPDATE
 function featured(featured , id){

   var data = {
        'id':id,
        'featured':featured
   };

   console.log(data);

    $.ajax({
        type: "Post",
        url: "/featured",
        data: data,
        success: function (response) {
            if(response.status === 200){

                $('#mm').DataTable().ajax.reload();

            }

            if(response.status === 400){
                alert(response.message);
            }
        }
    });
 }

  //FLASH SALE
  function flash(flash , id){

    var data = {
         'id':id,
         'flash':flash
    };


     $.ajax({
         type: "Post",
         url: "/flash",
         data: data,
         success: function (response) {
             if(response.status === 200){

                 $('#mm').DataTable().ajax.reload();

             }

             if(response.status === 400){
                 alert(response.message);
             }
         }
     });
  }




 //UPLOAD PRODUCT
 jQuery(function(){

   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

    });

    $('#productupload').on('submit', function (e) {
        e.preventDefault();

        $('.alert-error').html('');

        var inputdatails = new FormData($('#productupload')[0]);
        console.log(inputdatails);


        $.ajax({
            type: "POST",
            url: "/uploadproduct",
            data:inputdatails ,
            contentType:false,
            processData:false,
            success: function (response) {
                console.log(response.error);


                if(response.status === 200){



                   $('#productupload').closest('form').find("input[type=text],input[type=number], textarea").val('');

                   swal({
                    'title':response.message,
                    'icon': 'success',
                    'timer': 1000
                    });



                    getproduct();

                }else{

                   $.each(response.error, function (key, validateerror) {
                        $('.alert-error').append('<li class="" style="color: red;">'+validateerror +'</li>');
                   });
                }
            }
        });

    });
});

//EDIT PRODUCT
jQuery(function(){

    $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }

     });

     $('#productedit').on('submit', function (e) {
         e.preventDefault();

         $('.alert-error-edit').html('');

         var inputdatails = new FormData($('#productedit')[0]);
         console.log(inputdatails);


         $.ajax({
             type: "POST",
             url: "/editproduct",
             data:inputdatails ,
             contentType:false,
             processData:false,
             success: function (response) {
                 console.log(response.error);


                 if(response.status === 200){

                    $('#modal-edit-product').modal('hide');



                    swal({
                     'title':response.message,
                     'icon': 'success',
                     'timer': 1000
                     });

                     $('#example1').DataTable().ajax.reload();



                 }else{

                    $.each(response.error, function (key, validateerror) {
                         $('.alert-error-edit').append('<li class="" style="color: red;">'+validateerror +'</li>');
                    });
                 }
             }
         });

     });
 });


