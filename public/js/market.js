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

                $.each(response.cat, function (key, category) {
                     $('#categories').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");
                     $('#editcategories').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");
                     $('#categoryeditsub').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");
                });

            }

        }
    });



     //GET PRODUCT BRAND FOR UPOAD
     $.ajax({
        type: "Get",
        url: "/getbrand",
        dataType: "json",
        contentType:"application/json",
        processData:false,
        Cache:false,
        async:true,
        success: function (response) {

               // console.log(response.brands);
                $.each(response.brands, function (key, bran) {


                     $('.brandp').append("<option value='"+bran.id+"'>"+bran.brand+"</option>");

                     $('.filterbrandss').append('<label class="list-group-item small">'
                     +'<input class="form-check-input me-1" type="radio" name="brand" value="'+bran.id+'">'
                      +bran.brand
                     +'</label>');
                });



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



  //SEARCH PRODUCT
   $('#searchpro').on('keyup', function () {
        var search = $(this).val();
        var search2 = search.trim();
        if(search2.length !== 0 &&  search !== null){
            //console.log(search2);

            var _token = $('input[name="_token"]').val();
            var data = {
                'search':search2,
                '_token': _token
            }
            //console.log(data);
            //alert(search);
            $.ajax({
                type: "POST",
                url: "/search",
                data: data,
                success: function (response) {

                    if(response.status === 200){
                        //console.log(response.message);
                        $('.appensearch').html(' ');
                        $('.appensearch').append(response.message);
                    }

                    if(response.status === 201){
                        $('.appensearch').html(' ');
                        $('.appensearch').append(response.message);
                    }
                }
            });
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
        { data:'singlesize'},
        { data:'colour'},
        { data:'condition'},
        { data:'search'},
        { data:'categoryname'},
        { data:'sub_categoryname'},


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



    //GET ALL PRODUCT FEATURED AND FLASH
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

     //GET ALL CATEGORY
     $('#category').DataTable({
        ajax:{
            url:"getcategory",
            dataSrc: 'categories',
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
            { data:'categoryname',
                name:'categoryname'
            },
            { data: function (row){
                return '<i class="fa fa-edit text-info" data-toggle="modal" data-target="#modal-edit-category" onclick="getcategory('+row.id+',\''+row.categoryname+'\');" aria-hidden="true"></i>'
            },
                name: 'id'
            }
        ]
     });


      //GET ALL BRAND
      $('#brands').DataTable({
        ajax:{
            url:"/getbrand",
            dataSrc: 'brands',
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
            { data:'brand',
                name:'brand'
            },
            { data: function (row){
                return '<i class="fa fa-edit text-info" data-toggle="modal" data-target="#modal-edit-category" onclick="getbrand('+row.id+',\''+row.brand+'\');" aria-hidden="true"></i>'
            },
                name: 'id'
            }
        ]
      });

     //GET ALL SUB CATEGORY
    $('#sub-category').DataTable({
        ajax:{
            url:"getsubcategory",
            dataSrc: 'subcategory',
        },
        responsive: true,
        paging: true,
        lengthChange: true,
        info: true,
        autoWidth: false,
        searching:true,
        scrollY:600,
        scrollX:600,
        ordering:false,
        columns:[
            { data:'sub_categoryname',
             name:'sub_categoryname'
            },
            { data: function (row){
                return '<i class="fa fa-edit text-info" data-toggle="modal" data-target="#modal-edit-subcategory" onclick="editsubcategory('+row.id+',\''+row.sub_categoryname+'\',\''+row.image+'\');" aria-hidden="true"></i>'
            },
                name: 'id'
            },
            { data: 'image',
              name:'image'
            },
            { data: 'categoryname',
            name:'categoryname'
            },



        ],
        columnDefs:
        [{
            'targets':2,
            'data':'image',
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
                $('#editsinglesize').val(produ.singlesize);
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

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });



            }else{

                Swal.fire({
                    icon: 'error',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
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

                 Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });

             }else{

                 Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });

             }
         }
     });


 }



 //DELETE PRODUCT
 function deleteproduct(id){

      Swal.fire({
        title: 'Are you sure?',
        text: "Product will be deleted !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "Get",
                url: "/deleteproduct/"+id,
                success: function (response) {

                    if(response.status === 200){

                        Swal.fire({
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1700
                        });



                       $('#example1').DataTable().ajax.reload();

                    }else{

                        Swal.fire({
                            icon: 'error',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1700
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

                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1700
                    });



                    $('#example1').DataTable().ajax.reload();

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


         $.ajax({
             type: "POST",
             url: "/editproduct",
             data:inputdatails ,
             contentType:false,
             processData:false,
             success: function (response) {


                 if(response.status === 200){

                    $('#modal-edit-product').modal('hide');

                     Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1000
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

    //GET CATEGORY FOR EDIT
 function getcategory(id,cat){

    $('#editcategoryname').val(cat);

    $('#catid').val(id);
 }

 //ADD CATEGORY
 $('#addcategory').submit(function (e) {
    e.preventDefault();

    $('.hhhb').html('');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    var dat = new FormData($('#addcategory')[0]);

    //console.log(data);

    $.ajax({
        type: "POST",
        url: "addcategory",
        data: dat,
        contentType:false,
        processData:false,
        success: function (response) {

            if(response.status === 200){

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });


                $('#category').DataTable().ajax.reload();


                $('#categories').html('');
                $('#editcategories').html('');
                $('#categoryeditsub').html('');

                    //THIS IS TO GET CATEGORY WHEN IT IS UPDATED
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

                                    $.each(response.cat, function (key, category) {
                                        $('#categories').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");
                                        $('#editcategories').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");
                                        $('#categoryeditsub').append("<option value='"+category.id+"'>"+category.categoryname+"</option>");

                                    });

                                }

                            }
                        });

            }else{
                //console.log(response.message);

                $.each(response.message, function (key, validateerror) {
                    $('.hhhb').append('<li class="" style="color: red;">'+validateerror +'</li>');
               });
            }
        }
    });


 });

 //EDIT CATEGORY
 $('#editcategory').submit(function (e) {
    e.preventDefault();

    $('.editcat').html('');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    var dat = new FormData($('#editcategory')[0]);

    $.ajax({
        type: "POST",
        url: "editcategory",
        data: dat,
        contentType:false,
        processData:false,
        success: function (response) {

            if(response.status === 200){

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });


                $('#category').DataTable().ajax.reload();

            }else{

                $.each(response.message, function (key, validateerror) {
                    $('.editcat').append('<li class="" style="color: red;">'+validateerror +'</li>');
               });
            }
        }
    });


 });

 //ADD SUB CATEGORY
 $('#addsubcategory').submit(function (e) {
    e.preventDefault();

    $('.sub').html('');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    var dat = new FormData($('#addsubcategory')[0]);

    //console.log(data);

    $.ajax({
        type: "POST",
        url: "addsubcategory",
        data: dat,
        contentType:false,
        processData:false,
        success: function (response) {

            if(response.status === 200){

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });


                $('#sub-category').DataTable().ajax.reload();

            }else{
                $.each(response.message, function (key, validateerror) {
                    $('.sub').append('<li class="" style="color: red;">'+validateerror +'</li>');
               });
            }
        }
    });


 });

 // GET SUB CATEGORY TO BE EDITED
 function editsubcategory(id,sub,imag){

    var id =id;
    var sub =sub;
    var imag =imag;

    $('.subimage').html('');

    if(imag !== ''){
        $('.subimage').append('<div class="card bb p-0" style="height:70px; width:70px;"><img src="'+ imag +'" class="mx-auto rounded"'
        +' height="70" width="70"> <div class="card-body  py-3 "><p class="card-title text-danger  text-center subimagedata  mt-n3"'
        +' onclick="subdeleteimage()" id="" style="cursor:pointer;" data-image="'+imag+'" data-id="'+id+'">delete</p></div></div>');

        $('.subimsgechange').addClass('d-none');
        $('.subimage').removeClass('d-none');
    }else{
        $('.subimage').addClass('d-none');
        $('.subimsgechange').removeClass('d-none');
    }

   $('#subeditids').val(id);
   $('#oldimage').val(imag);
   $('#editsubcategoryname').val(sub);


 }


//DELETE SUBCATEGORY IMAGE
function subdeleteimage(){

    var id =  $('.subimagedata').attr('data-id');
    var image =  $('.subimagedata').attr('data-image');


      $.ajax({
          type: "Post",
          url: "deletesubcategoryimage",
          data:{
              id: id,
              image:image
          },

          success: function (response) {
              if(response.status === 200){

                $('.subimage').addClass('d-none');
                $('.subimsgechange').removeClass('d-none');

                  Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });



              }else{

                Swal.fire({
                    icon: 'error',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });

              }
          }
      });
}

//EDIT SUB CATEGORY
$('#editsubcategory').submit(function (e) {
    e.preventDefault();

    $('.subedit').html('');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    var dat = new FormData($('#editsubcategory')[0]);

    $.ajax({
        type: "POST",
        url: "editsubcategory",
        data: dat,
        contentType:false,
        processData:false,
        success: function (response) {

            if(response.status === 200){

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });


                $('#sub-category').DataTable().ajax.reload();

            }else{

                $.each(response.message, function (key, validateerror) {
                    $('.subedit').append('<li class="" style="color: red;">'+validateerror +'</li>');
               });
            }
        }
    });


 });

 function detailsmodal(id){
         $(".alert-danger").html('');
         $('#detailsname').html('');
         $('#detailsbrand').html('');
         $('#detailsprice').html('');
         $('#detailslistprice').html('');
         $('#detailsmainimage').html('');
         $('#detailspercent').html('');
         $('#detailsdesc').html('');
         $('#detailsspec').html('');
         $('#detailsize').html('');
         $('.caro').html('');


       $.get("detailsmodal/"+id,function(response) {
               // console.log(response.message);
            if(response.status === 200){
                $.each(response.message, function (key, detais) {
                    //$('#detailsprice').append('&#8358;');
                   // $('#detailslistprice').append('&#8358;');

                var price =  new Intl.NumberFormat('en-NG', { maximumSignificantDigits: 3 }).format(detais.price);
                var listprice =  new Intl.NumberFormat('en-NG',{ maximumSignificantDigits: 3 }).format(detais.listprice);

                    $('#detailsname').append(detais.productname);
                    $('#detailsbrand').append(detais.brand);
                    $('#detailsprice').append('&#8358;'+price);
                    $('#detailslistprice').append('&#8358;'+listprice);
                    $('#detailspercent').append('&#37;'+detais.percentage);
                    $('#detailsdesc').append(detais.description);
                    $('#detailsspec').append(detais.specification);

                    if(detais.size != "" && detais.size != null){
                        //console.log(detais.size);
                        var si = detais.size.split(',');

                            $.each( si, function (key, siz) {
                                var sizesp = siz.split(':');
                                   // console.log(sizesp);
                                var mone = new Intl.NumberFormat('en-NG', { maximumSignificantDigits: 3 }).format(sizesp[2]);
                                 var clo = sizesp[1].slice(1);
                                 var szz = sizesp[0].replace(/ +/g, "");

                                $('#detailsize').append('<div class="col-11 m-3 d-flex justify-content-around">'
                                +'<h4 class="text-info">'+sizesp[0]+'</h4>  '
                                +'<i class="fa fa-square " aria-hidden="true" style="margin-top:1px; margin-left:10px; font-size:25px; color:'+sizesp[1]+';"></i>'
                                +'<h5 style="margin-left:20px;">&#8358; '+mone+'</h5>'
                                +'<input  type="number" class="w-25 h-75 border border-info " id="'+szz+sizesp[3]+clo+sizesp[2]+'" value="" min="1" max="'+sizesp[3]+'" placeholder="Qty">'
                                +'<button class="btn btn-sm btn-info  h-75" onclick="add_to_cart(\''+detais.id+'\',\''+sizesp[0]+'\',\''+sizesp[1]+'\',\''+sizesp[2]+'\','+sizesp[3]+',\''+detais.main_image+'\',\''+detais.productname+'\')" style="margin-left:10px;"><i class="fa fa-shopping-cart"></i></button>'
                                +'</div>');
                            });



                       // console.log(si);
                    }else{
                       // var sizesp = detais.singlesize.split(':');

                        //var mone = new Intl.NumberFormat('en-NG', { maximumSignificantDigits: 3 }).format(sizesp[2]);
                         var clo = detais.colour.slice(1);
                         var szz = detais.singlesize.replace(/ +/g, "");

                        $('#detailsize').append('<div class="col-11 m-3 d-flex justify-content-around">'
                        +'<h4 class="text-info">'+detais.singlesize+'</h4>  '
                        +'<i class="fa fa-square " aria-hidden="true" style="margin-top:1px; margin-left:10px; font-size:25px; color:'+detais.colour+';"></i>'
                        +'<h5 style="margin-left:20px;">&#8358; '+detais.price+'</h5>'
                        +'<input  type="number" class="w-25 h-75 border border-info " id="'+szz+detais.quantity+clo+detais.price+'" value="" min="1" max="'+detais.quantity+'" placeholder="Qty">'
                        +'<button class="btn btn-sm btn-info  h-75" onclick="add_to_cart(\''+detais.id+'\',\''+detais.singlesize+'\',\''+detais.colour+'\',\''+detais.price+'\','+detais.quantity+',\''+detais.main_image+'\')" style="margin-left:10px;"><i class="fa fa-shopping-cart"></i></button>'
                        +'</div>');
                    }


                 $('.caro').append('<div class="carousel-item rounded active">'
                 +'<img src="'+detais.main_image+'" class="d-block w-100" alt="...">'
                 +'<div class="carousel-caption d-none d-md-block">'
                     +'<h5>First slide label</h5>'

                 +'</div>'
                +'</div>'
                );


                  //console.log(JSON.parse(detais.images));
                    var images = JSON.parse(detais.images);
                    $.each(images, function (key, imag) {
                         $('.caro').append('<div class="carousel-item rounded">'
                         +'<img src="'+imag+'" class="d-block w-100" alt="...">'
                         +'<div class="carousel-caption d-none d-md-block">'
                             +'<h5>First slide label</h5>'

                         +'</div>'
                        +'</div>'
                       );

                    });


                });

            }

        }
       );
 }

 function sizepriceqty(){
    $('#size').val('');


    var spqc = "";

    for(var i = 1; i <=5 ; i++){
        if($('#size'+i).val() != "" && $('#colour'+i).val() != "" && $('#price'+i).val() != "" && $('#quantity'+i).val() != ""){
            spqc += $('#size'+i).val()+':'+$('#colour'+i).val()+':'+$('#price'+i).val()+':'+$('#quantity'+i).val()+',';
        }
    }

    $('#size').val(spqc);

}

function editsizepriceqty(){

    $('#editsize').val('');

    var editsiz = "";

    for(var i = 1; i <=5 ; i++){
        if($('#editsize'+i).val() != "" && $('#editcolour'+i).val() != "" && $('#editprice'+i).val() != "" && $('#editquantity'+i).val() != ""){
            editsiz += $('#editsize'+i).val()+':'+$('#editcolour'+i).val()+':'+$('#editprice'+i).val()+':'+$('#editquantity'+i).val()+',';
        }
    }

    $('#editsize').val(editsiz);

}



 //GET NUMBER ON CART
 cart();
 function cart(){
    $('.mycart').html('');
        $.get("/cart", function (response) {
                if(response.status === 200){
                    if(response.message > 0){
                        $('.mycart').append(response.message);
                    }else{
                        $('.mycart').append('0');
                    }

                }

        });
 }

 subtotal();
 function subtotal(){
    $('.subtotal').html('');
    $.get("/subtotal",function (response) {
            if(response.status === 200){
                if(response.message > 0){
                    var subtotal =  new Intl.NumberFormat('en-NG', { maximumSignificantDigits: 3 }).format(response.message);
                    $('.subtotal').append('&#8358;'+subtotal);
                }

            }

    });
 }



//ADD TO CART
function add_to_cart(id, size, colo, price, available,image,productname){
    $(".alert-danger").html('');

    //alert(price);
    $('.quantity-error').html('');
    var id = id;
    var size = size;
    var colo = colo;
    var price = price;
    var available = available;
    var image = image;
    var productname = productname;
    var clo = colo.slice(1);
    var szz = size.replace(/ +/g, "");
    var quantity = $("#"+szz+available+clo+price).val();


    var datacart = {
        'id':id,
        'size':size,
        'colo':colo,
        'price':price,
        'quantity':quantity,
        'available':available,
        'image':image,
        'productname':productname
    };




    if(quantity == "" || quantity == 0){
        $('.quantity-error').append("<p>Quantity is need!</p>");

        return
    }

    if(quantity > available){
        $('.quantity-error').append("<p>There are only "+available+"  size " +size+" colour  "+colo+" available</p>");

        return
    }

    if(quantity != "" && quantity != 0){

        $.ajax({
            type: "get",
            url: "/addtocart",
            data: datacart,
            dataType:"json",
            success: function (response) {
                if(response.status === 200){
                    cart();
                    subtotal();
                    Swal.fire({
                        position: 'top-end',
                        width: 600,
                        title: response.message,
                        color: 'black',
                        background: 'rgba(94, 228, 94, 0.634)',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $(".alert-danger").append(response.qtybigger);

                }

                if(response.status === 201){


                    $('#'+response.identify).css('background-color', 'rgba(197, 80, 80, 0.123)');

                    $(".alert-danger").append(response.message);
                }



                if(response.status === 400){
                    $.each(response.message, function (key, error) {
                         $('.alert-danger').append('<li>'+error+'</li>');
                    });
                }
            }
        });



    }



}

//REMOVE OR ADD PRODUCT AT THE CART PAGE
function removeaddcart(id, size, colour, price,quantity, available,mode){
   $dta = {
    'id':id,
    'size':size,
    'colour':colour,
    'price':price,
    'quantity':quantity,
    'available':available,
    'mode':mode
   }


   console.log($dta);

   $.ajax({
    type: "get",
    url: "removeaddcart",
    data: $dta,
    dataType:"json",
    success: function (response) {
        if(response.status === 200){
            cart();
            subtotal();
            location.reload();

           Swal.fire({
            position: 'top-end',
            width: 600,
            title: response.message,
            color: 'black',
            background: 'rgba(94, 228, 94, 0.634)',
            showConfirmButton: false,
            timer: 1500
          });
        }



        if(response.status === 400){

            Swal.fire({
                icon: 'error',
                title: response.message,
                showConfirmButton: false,
                timer: 1700
            });


        }
    }
});

}

//ADD BRAND
$('#addbrand').submit(function (e) {
    e.preventDefault();

    $('.hhhb').html('');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    var dat = new FormData($('#addbrand')[0]);

    //console.log(dat);

    $.ajax({
        type: "POST",
        url: "addbrand",
        data: dat,
        contentType:false,
        processData:false,
        success: function (response) {

            if(response.status === 200){

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });


                $('#brands').DataTable().ajax.reload();


                $('#brandname').html('');
                $('#editbrand').html('');
               // $('#categoryeditsub').html('');
            }else{
                //console.log(response.message);

                $.each(response.message, function (key, validateerror) {
                    $('.hhhb').append('<li class="" style="color: red;">'+validateerror +'</li>');
               });
            }
        }
    });


 });

 //GET BRAND FOR EDIT
 function getbrand(id,cat){

    $('#editbrandname').val(cat);

    $('#brandid').val(id);
 }



 //EDIT BRAND
 $('#editbrand').submit(function (e) {
    e.preventDefault();

    $('.editbrand').html('');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    var dat = new FormData($('#editbrand')[0]);

    $.ajax({
        type: "POST",
        url: "editbrand",
        data: dat,
        contentType:false,
        processData:false,
        success: function (response) {

            if(response.status === 200){

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1000
                });


                $('#brands').DataTable().ajax.reload();

            }else{

                $.each(response.message, function (key, validateerror) {
                    $('.editbrand').append('<li class="" style="color: red;">'+validateerror +'</li>');
               });
            }
        }
    });


 });

 $(document).ready(function () {

    $('#submitfiltersmall').submit(function (e) {
     e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
         $data = new FormData($('#submitfiltersmall')[0]);
         console.log($data);

         $.ajax({
            type: "POST",
            url: "/filter",
            data: $data,
            contentType:false,
            processData:false,
            success: function (response) {
                if(response.status === 200){
                    $('.filterproduct').html('');

                    console.log(response.message);

                    $.each(response.message, function (key, product) {
                         $('.filterproduct').append('<div class="card p-0 m-1 col-2 subcatprodd  " style="">'
                            +'<img src="'+product.main_image+'" class="card-img-top" alt="...">'
                            +'<div class="card-body p-1">'
                               +'<p class="card-text  small">'+product.productname+'</p>'
                               +'<p class="card-text mt-n3 small">'+product.price+'</p>'
                            +'</div>'
                          +'</div>');
                    });
                }

                if(response.status === 201){

                }
            }
        });
    });

    $('#submitfilterbig').submit(function (e) {
        e.preventDefault();

           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }

           });
            $data = new FormData($('#submitfilterbig')[0]);
            console.log($data);

            $.ajax({
               type: "POST",
               url: "/filter",
               data: $data,
               contentType:false,
               processData:false,
               success: function (response) {
                   if(response.status === 200){
                       $('.filterproduct').html('');

                       console.log(response.message);

                       $.each(response.message, function (key, product) {
                            $('.filterproduct').append('<div class="card p-0 m-1 col-2 subcatprodd  " style="">'
                               +'<img src="'+product.main_image+'" class="card-img-top" alt="...">'
                               +'<div class="card-body p-1">'
                                  +'<p class="card-text  small">'+product.productname+'</p>'
                                  +'<p class="card-text mt-n3 small">'+product.price+'</p>'
                               +'</div>'
                             +'</div>');
                       });
                   }

                   if(response.status === 201){

                   }
               }
           });
    });












 });



















