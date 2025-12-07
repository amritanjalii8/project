<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-wrapper">
        <h1>Document</h1>
        <div class="form-site">
            <form action="form-handle.php" method="POST" enctype="multipart/form-data">
                <div class="inlinefield">
                    <div class="formfield">
                        <label for="fcitizen">Front side of citizen</label>
                        <input type="file" name="fcitizen" id="fcitizen" required>
                    </div>
                    <div class="formfield">
                        <label for="bcitizen">Backside of Citizen</label>
                         <input type="file" name="bcitizen" id="bcitizen" required>
                    </div>
                </div>

                <div class="formfield">
                    <label for="cv">Upload your cv</label>
                    <input type="file" name="cv" id="cv" required>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>