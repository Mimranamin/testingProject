<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Blu World Transfer | Dashboard</title>
      <link rel="shortcut icon" href="{{asset('backend\assets\img\bluworld_logo.png')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\plugins\bootstrap\css\bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\plugins\fontawesome\css\fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\plugins\fontawesome\css\all.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\css\animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\plugins\owlcarousel\owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\plugins\owlcarousel\owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\css\admin.css')}}">
      <link rel="stylesheet" href="{{asset('backend\assets\css\style.css')}}">
      
   </head>
   <body>
      <div class="main-wrapper">
                @include('backend.agent.includes.header')
                @include('backend.agent.includes.sidebar')
         <div class="page-wrapper">
            <div class="content container-fluid">
                @yield('content')
            </div>
         </div>
      </div>
      <script src="{{asset('backend\assets\js\jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('backend\assets\js\popper.min.js')}}"></script>
      <script src="{{asset('backend\assets\plugins\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('backend\assets\plugins\owlcarousel\owl.carousel.min.js')}}"></script>
      <script src="{{asset('backend\assets\plugins\slimscroll\jquery.slimscroll.min.js')}}"></script>
      <script src="{{asset('backend\assets\js\admin.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
      <script>
         $(document).ready( function() {
          $(document).on('click', "#add_attr", function(event) {
            $("#add_pass_lag").append(`<tr class="appended_tr">
                                          <td>
                                             <div class="input-group mb-2">
                                                   <div class="input-group-prepend">
                                                      <div class="input-group-text">Km</div>
                                                   </div>
                                                   <input type="text" class="form-control" name="from[]" id="inlineFormInputGroup" placeholder="From (km)" min="1" max="100">
                                             </div>
                                          </td>
                                          <td>
                                             <div class="input-group mb-2">
                                                   <div class="input-group-prepend">
                                                      <div class="input-group-text">Km</div>
                                                   </div>
                                                   <input type="text" class="form-control" name="to[]" id="to" placeholder="TO" min="1" max="100">
                                             </div>
                                          </td>
                                          <td>
                                             <div class="input-group mb-2">
                                                   <div class="input-group-prepend">
                                                      <div class="input-group-text">€</div>
                                                   </div>
                                                   <input type="text" class="form-control" name="price_per_km[]" id="price_per_km" placeholder="Price per Km" min="1" max="100">
                                             </div>
                                          </td>
                                       </tr>`);
          });
          $(document).on('click', "#remove_attr", function(event) {
            $(".appended_tr:last").remove();
          });
         });

         $(document).ready(function(){
         $('#category').multiselect({
         nonSelectedText: 'Select category',
         enableFiltering: true,
         enableCaseInsensitiveFiltering: true, 
         });
         $('#category_form').on('submit', function(event){
         event.preventDefault();
         var form_data = $(this).serialize();
         $.ajaxSetup({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
         });
         $.ajax({
         url:"{{ url('store') }}",
         method:"POST",
         data:form_data,
         success:function(data)
         {
         $('#category option:selected').each(function(){
         $(this).prop('selected', false);
         });
         $('#category').multiselect('refresh');
         alert(data['success']);
         }
         });
         });
         });
         </script>
   </body>
</html>