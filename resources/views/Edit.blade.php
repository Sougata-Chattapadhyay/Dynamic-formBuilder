<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
    <form action="/edit/{{$Data->id}}" method="post" id="update">
        @csrf
        <input hidden type="text" id='give' name = 'form' value = 'null' >
        <div id="edit"></div>
        <div class="row " style="align:center;">
            <button class = "btn btn-primary"  type="submit">Update</button>
        </div>
    </form>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // console.log({!! json_encode($Data) !!});
        var d = {!! json_encode($Data->Data) !!};
        console.log(d);
        var formRenderOptions = {
		  formData: d
		}
		var formBuilder =  $('#edit').formBuilder(formRenderOptions);
        // console.log(options);
        // $('#edit').formBuilder(options);
        var options = {
            onSave: function(evt, formData) {
                $('#give').val(formData);
                console.log('Hey formData');
             },
        };
        $('#update').submit(function() {
            console.log(formBuilder.actions.getData('json', true));
            $('.save-template').click();
            $('#give').val(formBuilder.actions.getData('json', true));
            console.log($('#give').val());
            if($('#give').val()=='null'){
                return false;
            }
            else{
                return true;
            }
        });
    });
</script>
</html>