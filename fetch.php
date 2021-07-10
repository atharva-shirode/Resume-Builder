
<?php
session_start();
    
    require_once "config.php";
    if(!$link)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Your info</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Your info</h2>
                    </div>

                    <?php
                    

                    

                    
                    //include_once 'db.php';
                    //$result = mysqli_query($link,"SELECT * FROM information");
                    echo $_SESSION['username'];
                     $result = mysqli_query($link,"SELECT * FROM information WHERE username='" . $_SESSION['username'] . "'");
                     
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                       
                      <tr>
                        <td>Name</td>
                        <td>contact no</td>
                        <td>Add</td>
                        <td>SSC</td>
                        <td>HSc</td>
                        <td>Deg</td>
                        <td>skills</td>
                        <td>POR</td>
                        <td>Exp</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["contactno"]; ?></td>
                        <td><?php echo $row["addr"]; ?></td>
                        <td><?php echo $row["ssc"]; ?></td>
                        <td><?php echo $row["hsc"]; ?></td>
                        <td><?php echo $row["deg"]; ?></td>
                        <td><?php echo $row["skills"]; ?></td>
                        <td><?php echo $row["por"]; ?></td>
                        <td><?php echo $row["exp"]; ?></td>
                    </tr>
                    
                    <?php
                    $i++;
                    }
                    ?>

                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>
                    
                   
                </div>
            </div>
            <div>
                <a href="logout.php" class="btn btn-primary"> logout</a></div>        
        </div>
    </div>
    
</body>
</html>


