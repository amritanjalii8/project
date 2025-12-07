<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$class = $_POST['class'];
$section = $_POST['section'];
$rollno = $_POST['rollno'];
$symbol_no = $_POST['symbolno'];
$term = $_POST['term'];
$attendance = $_POST['attendance'];

$math= $_POST['math'];
$science = $_POST['science'];
$english = $_POST['english'];
$nepali = $_POST['nepali'];
$social = $_POST['social'];
$health = $_POST['health'];

$total= $math+ $science + $health + $english + $nepali + $social;
$avg_grade= $total/6;
$percentage= $total/600 *100;
$grade= $percentage/25;

echo "Student's First Name= $first_name";
echo "<br>";
echo "Student's Last Name= $last_name";
echo "<br>";
echo "Class= $class";
echo "<br>";
echo "Section= $section";
echo "<br>";
echo "Roll no= $rollno";
echo "<br>";
echo "Symbol no= $symbol_no";
echo "<br>";
echo "$term Terminal Exam Result";
echo "<br>";


?>
    <table border="2" width="50%">
    <tr>
    <th>Subject</th>
    <th>Marks</th>
    </tr>

    <tr>
    <td>Math</td>
    <td><?php echo $math; ?></td>
    </tr>

    <tr>
    <td>Science</td>
    <td><?php echo $science; ?></td>
    </tr>

    <tr>
    <td>English</td>
    <td><?php echo $english; ?></td>
    </tr>

    <tr>
    <td>Nepali</td>
    <td><?php echo $nepali; ?></td>
    </tr>

    <tr>
    <td>Social</td>
    <td><?php echo $social; ?></td>
    </tr>

    <tr>
    <td>Health</td>
    <td><?php echo $health; ?></td>
    </tr>

    <tr>
    <td><b>Total</b></td>
    <td><?php echo $total; ?></td>
    </tr>
    </table>

    <?php 
    echo "<br>";
    echo"Total marks obtained= $total";
    echo "<br>";
echo "Average marks obtained= $avg_grade";
echo "<br>";
echo "Percantage= $percentage";
echo "<br>";
echo "Grade= $grade";
echo "<br>";

if( $grade <= 1.6)
{
    echo"The grade is basic. It is D";
}
else if( $grade>1.6 && $grade <=2.0)
{
    echo"The grade is acceptable. It is C";
}
else if( $grade> 2.0 && $grade <= 2.4)
{
    echo "The grade is satisfactory. It is C+";
}
else if( $grade> 2.4 && $grade <= 2.8)
{
    echo "The grade is good. It is B.";
}
else if( $grade> 2.8 && $grade <= 3.2)
{
    echo "The grade is very good. It is B+";
}
else if( $grade> 3.2 && $grade <= 3.6)
{
    echo "The grade is excellent. It is A";
}
else if( $grade> 3.6 && $grade <= 4)
{
    echo "The grade is outstanding. It is A+";
}
else
{
    echo "error";
}
echo "<br>";
 echo"The attendance= $attendance";

    ?>
</body>
</html>

