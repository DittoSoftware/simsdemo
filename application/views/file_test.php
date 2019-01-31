

<?php
        $directory = 'C:/xampp/htdocs/simsdemo/application/files';
        $array = scandir($directory);
        echo '<div class="table1">Current Directory:'.$directory.'<br>';
        echo '<form><table> <tr> <th>File Name</th><th>Combine</th></tr>';
        for($i=0; $i<count($array); $i++){
            if ($array[$i] != "." && $array[$i] != ".."){
                echo '<tr><td>'.$array[$i].'</td><td><input type="checkbox" name="file'.$i.'" value="'.$array[$i].'"</td></tr>';
            }
        }
        echo '</table><br><input type="submit" value="Submit"></form></div>';
?>

<!DOCTYPE html>
    <head>
    <title>File Manager</title>
    <style>
    table,th,td {
        border: 1px solid black;
        border-collapse:collapse;

    }

    th {
        height:25px;
        padding:10px;
    }

    td{
        padding :5px;
        width:15%;
        text-align: "center";
    }

    .table1{
        padding-left:10%;
        padding-top:10%;
    }
    </style>
    </head>
    <body>
        <div>
        
        </div>
       
    </body>

    

</html>
