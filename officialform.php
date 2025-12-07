<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-wrapper">
    <h1>Registration Form</h1>
    <h4>General Information</h4>
    <div class="form-site">
        <form action="form_handle.php" method="POST">
            <div class="inline-field">
                <div class="form-field">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" required placeholder="Ram">
                </div>
                <div class="form-field">
                     <label for="mname">Middle Name</label>
                    <input type="text" name="mname" id="mname" placeholder="Krishna">
                </div>
                <div class="form-field">
                     <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" required placeholder="Thapa">
                </div>
            </div>

            <div class="formfield">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" required placeholder="ramkrishnathapa@gmail.com">
            </div>

            <div class="inlinefield">
                <div class="form-field">
                    <label for="contact">Contact number</label>
                    <input type="number" name="contact" id="contact" required placeholder="9800000000">
                </div>

                <div class="form-field">
                    <label for="acontact">Alternative Contact Number</label>
                    <input type="number" name="acontact" id="acontact" required placeholder="9800000000">
                </div>
            </div>
           <input type="submit" value="Submit">

            <!-- <a href="personalinfo.php">Next</a> -->

        </form>
    </div>
    </div>
</body>
</html>