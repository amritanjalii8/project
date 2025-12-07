
<?php
$students=[["SN"=>"1","name"=>"Rohan","Class"=>"Bachelors","contact"=>98797897],["SN"=>"2","name"=>"Amrita","Class"=>"Bachelors","contact"=>8978967],["SN"=>"3","name"=>"Amrita","Class"=>"Bachelors","contact"=>8978967]];
// foreach($students as $stu){
//     echo $stu["SN"]."<br>";
//     echo $stu["name"]."<br>";
//     echo $stu["Class"]."<br>";
//     echo $stu["contact"]."<br>";

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1" cellspadding="2px" width=100%>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Class</th>
        <th>Contact</th>
    </tr>
    <?php foreach($students as $s ){ ?>
    <tr>
  <td><?php echo $s["SN"] ?></td>
  <td><?php echo $s["name"] ?></td>
  <td><?php echo $s["Class"] ?></td>
  <td><?php echo $s["contact"] ?></td>
  </tr>
    <?php }  ?>
   </table>

   <?php 
   $fruits=[["Name"=>"Banana", "Colour"=>"Yellow"], ["Name"=>"Apple", "Colour"=>"Red"], ["Name"=>"Graphes", "Colour"=>"Green"]];
      ?>
      <table border="1" cellspadding="2px" width=100%>
        <tr>
            <th>Name</th>
            <th>Colour</th>
        </tr>
        <?php foreach($fruits as $s ){ ?>
            <tr>
                <td><?php echo $s["Name"] ?></td>
                <td><?php echo $s["Colour"] ?></td>
            </tr>
            <?php } ?>
      </table>
</body>
</html>