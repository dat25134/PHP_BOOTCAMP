<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id='time'></h1>
</body>
<script>
    let text = "<?php echo date("Y-M-d h:m:s");?>";
    document.getElementById('time').innerHTML = text;
    
</script>
</html>