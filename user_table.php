<?php
include 'controller/get_all_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<style>
    table, th, td {
        border: 1px solid;
        color: #800000;
        font-family: Sans-serif;
        TEXT-TRANSFORM:UPPERCASE;
       
    }
    </style> 
<body>
 <table>
    <thead>
        <tr>
          <th>Name</th>
          <th>Year Level</th>
          <th>Section</th>
          <th>Department</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><center> <?php echo $row['f_name']; ?> <?php echo $row['m_name']; ?> <?php echo $row['l_name']; ?> </td>  
                <td><center><?php echo $row['year_lvl']; ?></td>
                <td><center><?php echo $row['section']; ?></td>
                <td><center><?php echo $row['dept']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
 </table>
</body>
</html>