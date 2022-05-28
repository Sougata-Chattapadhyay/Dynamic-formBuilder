<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Use</h1>
    <div id="render-container"></div>
    <button class = "btn btn-primary align-center" id="submit">Submit</button>
    <div id="test">

    </div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
    <script>
        function isset (ref) { return typeof ref !== 'undefined' }
        // if(isset($json )){
        //     console.log('working');
        // }
        var l = "".{!! $type!!};
        if(l == 'edit'){
            console.log('Edit');
        }
        else{
            console.log(l);
        }
        var jsonForm = {!! json_encode($jsonForm) !!}
        console.log(jsonForm);
		const formRenderOptions = {
		  formData: jsonForm
		}
		var formRenderInstance = $('#render-container').formRender(formRenderOptions);
        console.log(jsonForm);
        $('#submit').click(function(){
            // console.log(formRenderInstance.action.getData());
            // document.getElementById('submit').addEventListener('click', function() {
            // alert(formRenderInstance.getData('json', true));
            console.log(JSON.stringify(formRenderInstance.userData));
            var test = JSON.stringify(formRenderInstance.userData);
            const formRenderOptions = {
		      formData: test
		    }
            $('#test').formRender(formRenderOptions)
        });
    
    </script>
    
</html>