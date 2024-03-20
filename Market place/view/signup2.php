<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup2</title>
    <style>
    body {
        display: flex;
        font-size: 20px;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .option {
        text-align: center;
        background-color: #D9D9D9;
    }

    form {
        width: 40%;
        border: 1px solid #000;
        border-radius: 10px;
        margin: auto;
        padding: 30px;
    }
    .form-group {
        padding: 3px;
        display: block; 
    }
    .center {
        text-align: center; 
    
    }
    
    label {
        font-size: 20px; 
    }

    button {      
        font-size: 20px; 
    }
    </style>
</head>

<body>
    <form action="../controller/singupCheck.php" method="post">
        <div class="form-group center">
          <h1>Signup</h1>    
        </div>
        <div class="form-group">
          <label for="name">First Name:</label>
          <input type="text" name="First_Name"  required>
          <label for="name">Last Name:</label>
          <input type="text" name="Last_Name"  required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email"  required>
        </div>
        
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password"  required>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" name="confirm_password"  required>
        </div>
        <div class="form-group">
          <label for="forgot_password_phrase">Forgot password phrase:</label>
          <input type="text" name="forgot_password_phrase"  required>
        </div>
        <div class="form-group">
          <label for="Country">Country:</label>
          <input type="text" name="Country"  required>
        </div>

        <div class="form-group">
          <label for="date_of_birth">Date of Birth:</label>
          <input type="date" name="date_of_birth"  required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <input type="radio" name="gender" id="male" value="male" required>
          <label for="male">Male</label> 
          <input type="radio" name="gender" id="female" value="female" required>
          <label for="female">Female</label>  
          <input type="radio" name="gender" id="other" value="other" required>
          <label for="other">Other</label>  
        </div>

        <div class="form-group center">
          <button type="submit">Create Account</button>
        </div>
        <div class="form-group center">
          <a href="login1.php">Already have an account</a>
        </div>
      </form>
</body>

</html>