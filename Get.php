<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

    <style>
        body {
            margin-top:30px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Our First Form for GET</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci aperiam exercitationem iure dolore. Quae veniam soluta error! Blanditiis, impedit cumque?</p>
                
                <p>
                <!--If we do not place the check here, we will get the index undefined-->
                <!--$_GET = Super Global Varibles -->
                    <?php if(isset($_GET['fname']) && !empty($_GET['fname'])){ ?>
                    Fisrt Name: <?php echo $_GET['fname']; ?> <br>
                    <?php } ?>
                    <?php if(isset($_GET['lname']) && !empty($_GET['lname'])){ ?>
                    Last Name: <?php echo $_GET['lname']; ?> <br>
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class = "column column-60 column-offset-20">
            <!--GET = HTTP verb -->
            <!-- GET = Something is used for reading -->
                <form action="" method = "GET">
                    <label for="fname">First Name</label>
                    <input type="text" name = "fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name = "lname" id = "lname">

                    <button type = "submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>