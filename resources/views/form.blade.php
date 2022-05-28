<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From</title>
    <!-- FOR CACHE CLEARING -->
    <meta http-equiv='cache-control' content='no-cache'> 
        <meta http-equiv='expires' content='0'> 
        <meta http-equiv='pragma' content='no-cache'>
        <!-- END OF CACHE CLEAR -->

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<h1>Form Builder</h1>
    <form id = 'myform' method = 'POST' action="/save-temp">
        @csrf
        <input hidden type="text" id='give' name = 'form' value = 'null' >
        <div id="fb-editor"></div> 
        <button class = "btn btn-primary" type = 'submit' >Submit</button>
    </form>
    <div class="row mt-5 ">
        <div class="col-md-3 text-center mb-3">
            <a href="/edit"><button class = 'btn btn-primary'>Admin Edit</button></a>
        </div>
        <div class="col-md-3">
            <a href="/show-create"><button class = 'btn btn-primary'>Admin Read</button></a>
        </div>
        <div class="col-md-2 text-center mb-3">
            <a href="/use"><button class = 'btn btn-primary'>User Use</button></a>
        </div>
        

    </div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    
    <!-- <script type="module" src="/js/custom/song/form_builder.js"></script> -->
    <!-- <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script> -->
    <script>
       

$(document).ready(function(){

   
	$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  	})
  	// console.log('Hey');
	var options = {
      onSave: function(evt, formData) {  
        $('#give').val(formData);
        console.log('Hey formData');
        
        },
    };
    $('#myform').submit(function() {
        // console.log('Hey submit');
        $('.save-template').click();
        // $('#give').val(formData);
        console.log($('#give').val());
        if($('#give').val()=='null'){
            return false;
        }
        else{
            return true;
        }
    });

	$('#fb-editor').formBuilder(options);
});
    </script>
</html>