<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post" id='form'>
        @csrf
        <input hidden type="text" id='give' name = 'form' value = 'null' >
        @if(isset($check))

                <div id="test">
                </div>
                <button class = "btn btn-primary" type= 'submit'>Update</button>
        @endif
    </form>
</body>
<script>
    
</script>
</html>