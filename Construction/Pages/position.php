<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>position</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style> 
        .tab{
            width: 100%;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <?php include("sections/top1.html"); ?>
    <hr style="border-top: 2px solid #7CFC00;"><br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Position Details</h2>
                        <a href="add_position.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Position</a>
                    </div>
                    <div class="tab" style="float: right">
                    <?php
                    
                    require_once "db.php";
                    
                   
                    $sql = "SELECT * FROM position";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Sn</th>";
                                        echo "<th>Position</th>";
                                        echo "<th>Type</th>";
                                        echo "<th>Sallary</th>";
                            
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                    echo "<tr>";
                                        echo "<td>" . $row['pid'] . "</td>";
                                        echo "<td>" . $row['position'] . "</td>";
                                        echo "<td>" . $row['p_type'] . "</td>";
                                        echo "<td>" . $row['daily_rate'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                           
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                   
                    mysqli_close($link);
                   ?>
                </div>
                </div>
            </div>        
        </div>
    </div>
    <hr style="border-top: 2px solid #7CFC00;"><br>
</body>
</html>