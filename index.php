<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form</h1>
    <div class="container">
        <form action="connect.php" method="post">
        <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name">        
        </div>
        <div>
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email">       
        </div>
        <div class="genderContainer">
        <label>Gender</label>
        <input type="radio" name="gender" value="m">Male
        <input type="radio" name="gender" value="f">Female
        <input type="radio" name="gender" value="o">Others    
        </div>
        <div>
        <label>Mobile</label>
        <input type="text" name="mobile" placeholder="Enter your mobile">       
        </div>
        <div>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">       
        </div>
        <div class="btn">
        <button type="sumbit">Submit data</button>
        </div>
        
        </form>
    </div>
</body>
</html>