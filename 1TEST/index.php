<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    position: relative;
    justify-content: center;
    align-items: center;
}

.wrapper {
    display: flex;
    height: 700px;
    width: 700px;
    position: relative;
}

.main {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: url(old.jpg) no-repeat center;
    background-size: cover;
    z-index: 3;
}

.overlay {
    width: 10%;
    height: 100%;
    position: relative;
    z-index: 4;
    background: url(new.jpg) no-repeat center;
    background-attachment: fixed;
    transition: 2.2s linear;
}

.overlay:hover{
    transition: 0s linear;
    opacity: 0;
}

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="main">
        </div>

        <?php
            for ($i=0; $i < 10 ; $i++) { 
                echo "<div class='overlay'></div>";
            }
        ?>
    </div>
</body>
</html>


