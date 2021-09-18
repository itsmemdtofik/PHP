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
    $html = '<table><tr><th>Registeration Number</th>
    <th>Student Name</th>
    <th>Date</th>
    <th>Gender</th>
    <th>Department Name</th>
    <th>course name</th>
    <th>sem</th>
    <th>addres</th>
    <th>mobile number</th>
    <th>Password</th></tr>';
    while ($row = mysqli_fetch_assoc($res)) {
        $html .= '<tr><td>' . $row['regno'] . '</td><td>' . $row['name'] . '</td><td>' . $row['dte'] . '</td><td>' . $row['gen'] . '</td><td>' . $row['dept'] . '</td><td>' . $row['crs'] . '</td><td>' . $row['sem'] . '</td><td>' . $row['adrs'] . '</td><td>' . $row['mbno'] . '</td><td>'.$row['pass'].'</td></tr>';
    }
    $html .= '</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=report.xls');
    echo $html;
    ?>

</body>

</html>