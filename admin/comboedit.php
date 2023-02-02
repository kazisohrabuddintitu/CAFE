<html>

<?php
require('db.php');
include("auth_session.php");
?>

<body>
    <html>

    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/welcome.css" />
    </head>


    <body>

        <div class="maindiv">

            <?php
            
            $id = $_GET['preeti'];
            $x = mysqli_query($con,"SELECT * FROM `combo` WHERE `c_id`='$id'");
            while ($y = mysqli_fetch_array($x)) {
            ?>
            <div class="editForm">
                <form action="updatecombo.php" method="post">
                    <input type="hidden" value="<?php echo $y[0]; ?>" name="id" />
                    <div>
                        Product Name<input type="text" value="<?php echo $y[2]; ?>" name="name" />
                    </div>
                    <div>
                        Price<input type="text" value="<?php echo $y[4]; ?>" name="price" />
                    </div>
                    <input type="submit" value="submit" />
                </form>
            </div>
            <?php
            }
            ?>
        </div>
    </body>

    </html>