<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 50px);
            grid-gap: 10px;
            margin: 50px;
        }

        .box {
            width: 50px;
            height: 50px;
            border: 2px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            font-family: Arial, sans-serif;
        }

        
        .empty {
            visibility: hidden;
        }
    </style>
</head>
<body>

<?php
    $letters = ['A', 'B', 'C'];
?>

<div class="container">
    
    <div class="box"><?php echo $letters[0]; ?></div>
    <div class="box empty"></div>
    <div class="box empty"></div>

    
    <div class="box"><?php echo $letters[0]; ?></div>
    <div class="box"><?php echo $letters[1]; ?></div>
    <div class="box empty"></div>

    
    <div class="box"><?php echo $letters[0]; ?></div>
    <div class="box"><?php echo $letters[1]; ?></div>
    <div class="box"><?php echo $letters[2]; ?></div>
</div>

</body>
</html>