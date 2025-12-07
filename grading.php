<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
</head>
<body>
    <div class="form-wrapper">
        <h1>Student Grading System</h1>
        <div class="form-site">
            <form action="result.php" method="POST">
                <div class="inlinefield">
                    <div class="formfield">
                        <label for="fname">Student's First Name</label>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <div class="formfield">
                        <label for="lname">Student's Last Name</label>
                        <input type="text" name="lname" id="lname" required>
                    </div>
                </div>

                <div class="inlinefield">
                    <div class="formfield">
                        <label for="class">Class</label>
                        <input type="number" name="class" id="class">
                    </div>
                    <div class="formfield">
                        <label for="section">Section</label>
                        <input type="text" name="section" id="section">
                    </div>
                </div>

                <div class="inlinefield">
                    <div class="formfield">
                        <label for="rollno">Roll No</label>
                        <input type="text" name="rollno" id="rollno">
                    </div>
                    <div class="formfield">
                        <label for="symbolno">Symbol No</label>
                        <input type="text" name="symbolno" id="symbolno">
                    </div>
                </div>

                <div class="formfield">
                    <label for="term">Term</label>
                    <input type="text" name="term" id="term">
                </div>

                <div class="inlinefield">
                    <div class="formfield">
                        <label for="math">Math's score</label>
                        <input type="text" name="math" id="math">
                    </div>
                    <div class="formfield">
                        <label for="science">Science's score</label>
                        <input type="text" name="science" id="science">
                    </div>
                    <div class="formfield">
                        <label for="English">English's score</label>
                        <input type="text" name="english" id="english">
                    </div>
                    <div class="formfield">
                        <label for="Nepali">Nepali's score</label>
                        <input type="text" name="nepali" id="nepali">
                    </div>
                    <div class="formfield">
                        <label for="Social">Social's score</label>
                        <input type="text" name="social" id="social">
                    </div>
                    <div class="formfield">
                        <label for="Health">Health's score</label>
                        <input type="text" name="health" id="health">
                    </div>
                </div>

                <div class="formfield">
                    <label for="attendance">Student's Attendance</label>
                        <input type="text" name="attendance" id="attendance">
                </div>

                <input type="submit" value="submit">
            </form>
        </div>
    </div>


</body>
</html>