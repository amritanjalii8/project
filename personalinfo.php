<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-wrapper">
      <h1>Personal Information</h1>
      <div class="form-site">
      <form action="form_handle.php" method="POST">
        <div class="formfield">
          <label for="dob">Date of Birth</label>
          <input type="date" name="dob" id="dob" required>
        </div>

        <div class="inline-field">
          <div class="form-field">
            <label for="momname">Mother's Name</label>
            <input type="text" name="momname" id="momname" required>
          </div>
          <div class="form-field">
            <label for="dadname">Father's Name</label>
            <input type="text" name="dadname" id="dadname" required>
          </div>
        </div>

        <div class="inline-field">
          <div class="formfield">
            <label for="pprovince">Permament Province</label>
            <select name="pprovince" id="pprovince" required placeholder="Province">
              <option value="option1">Koshi</option>
              <option value="option2">Madhesh</option>
              <option value="option3">Bagmati</option>
              <option value="option4">Gandaki</option>
              <option value="option5">Lumbini</option>
              <option value="option6">Karnali</option>
              <option value="option7">Suduparchism</option>
            </select>
          </div>
          <div class="formfield">
            <label for="paddress">Permanent Address</label>
            <input type="text" name="paddress" id="paddress" required>
          </div>
        </div>

        <div class="inline-field">
          <div class="formfield">
            <label for="tprovince">Temporary Province</label>
            <select name="tprovince" id="tprovince" required placeholder="Province">
              <option value="option1">Koshi</option>
              <option value="option2">Madhesh</option>
              <option value="option3">Bagmati</option>
              <option value="option4">Gandaki</option>
              <option value="option5">Lumbini</option>
              <option value="option6">Karnali</option>
              <option value="option7">Suduparchism</option>
            </select>
          </div>
          <div class="formfield">
            <label for="taddress">Temporary Address</label>
            <input type="text" name="taddress" id="taddress" required>
          </div>
        </div>

        <a href="document.php">Next</a>
      </form>
      </div>
    </div>
</body>
</html>