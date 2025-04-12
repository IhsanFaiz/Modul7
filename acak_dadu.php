<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            font-family: sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 90vh;
        }
        h1{
            margin-bottom: 20px;
            font-weight: 600;
        }
        img{
            width: 10%;
            height: auto;
        }
        button{
            margin-top: 40px;
            padding: 10px 50px;
            background: white;
            border: none;
            box-shadow: 0 5px 10px 1px rgba(0,0,0,0.5);
            cursor: pointer;
            outline: none;
            font-weight: 600;
        }
        button:hover{
            background:rgb(241, 241, 241) ;
        }

    </style>
</head>
<body>
    <h1>Acak Dadu</h1>
    <?php
        $dadu = rand(1, 6);
    ?>
    <img src="img/<?php echo($dadu); ?>.png">
    <button onclick = "window.location.reload();" >Refresh</button>
</body>
</html>