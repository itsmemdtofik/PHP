<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCEL | PAGE</title>
    <style type="text/css">
        th {
            background-color: black;
            color: white;
        }
       
    </style>
</head>

<body>


    <?php
    error_reporting(0);
    require 'conn.php';
    $sql = "select * from reg";
    $res = mysqli_query($conn, $sql);
    $html = '<table><tr><th>Register Number</th><th>Name</th><th>Date</th><th>Gender</th><th>Department</th><th>Course</th><th>Semester</th><th>Address</th><th>Phoneno</th></tr>';
    while ($row = mysqli_fetch_assoc($res)) {
        $html .= '<tr><td>' . $row['regno'] . '</td><td>' . $row['name'] . '</td><td>' . $row['dte'] . '</td><td>' . $row['gend'] . '</td><td>' . $row['dept'] . '</td><td>' . $row['course'] . '</td><td>' . $row['sem'] . '</td><td>' . $row['address'] . '</td><td>'.$row['phoneno'].'</td></tr>';
    }
    $html .= '</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=report.xls');
    echo $html;
    ?>

</body>

</html>