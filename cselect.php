<?php

    $con=mysqli_connect("localhost","root","","gym");

    $qry="SELECT * FROM `contact`";
    
    $result=mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
        <table  class="table table-success table-striped table table-borderless">
            <tr class="table-dark">
                <td scope="col" class="">id</td>
                <td scope="col">name</td>
                <td scope="col">email</td>
                <td scope="col">mno</td>
                <td scope="col">comment</td>
                <td scope="col" colspan=2 align="center"> query</td>
              
            </tr>

            <tr >
            <?php

while($row=mysqli_fetch_array($result))
{           
?>
              
                <td scope="row"> <?php echo $row['id']?></td>
                <td> <?php echo $row['name']?></td>
                <td> <?php echo $row['email']?></td>
                <td> <?php echo $row['mno']?></td>
                <td> <?php echo $row['comment']?></td>

                <td>
                    <a href="cupdate.php?id=<?php echo $row['id']?>">update</a>
                </td>
               
                <td>
                    <a href="cdelete.php?id=<?php echo $row['id']?>">delete</a>
                </td>
            </tr>
                <?php
                
                    }    
                ?>
        
        </table>
</body>
</html>