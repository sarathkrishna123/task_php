<?php include('form_valid.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
</head>
<body>
    <script src="app.js"></script>
    <div class="container">
        <form name="sign_form" action="" onsubmit="return validateUser()" method="post">
            <h1>Form Data</h1>
            <div class="form_feild">
                <label for="name"><b>Name  </b></label>
                <input type="text" name="name" id='name' placeholder="Enter your name" ><br><br>

            </div>
            <div class="form_feild">
                <label for="email"><b>E-mail  </b></label>
                <input type="text" name="email" id="email" placeholder="exmple@gmail.com" required><br><br>
            </div>
            <div class="form_feild">
                <label for="mobnumber"><b>Mobile Number  </b></label>
                <input type="text" name="mobnumber" id="mobnumber" placeholder="Mobile number" required><br><br>
            </div>
            <div class="form_feild">
                <label for="address"><b>Address  </b></label>
                <input type="text" name="address" id='address' placeholder="Enter your Address" required><br><br>
            </div>
            <div class="form_feild">
                <label for="image"><b>Profile Image  </b></label>
                <input type="file" name="image" id='image' onchange="return fileValidation()" accept="image/*"><br><br>
            </div>
            <div class="form_feild">
                <button class="button" type="submit" value="submit" name="submit">Submit</button>
            </div>
            
        </form>
    </div>
</body>
</html>