<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login2</title>
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

    a {
        font-size: 15px;
        float: right;
    }

    input[type="password"] {
        width: calc(100% - 10px);
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #000;
        
    }
    </style>
</head>

<body>
    <form action="../controller/loginCheck.php" method="post">
        <div class="form-group center">
            <h1>Welcome </h1>
        </div>
        <div class="form-group ">
            <label>abc@gamil.com</label>
        </div>
        <div class="form-group center">
            <input type="password" placeholder="password " name="password"><br>
        </div>
        <div class="form-group center ">
            <!-- Style the link as a button -->
            <a href="forgot_password.php" class="button-link">Forgot password?</a><br>
        </div>
        <div class="form-group center">
            <button type="submit">Login</button>
        </div>

    </form>
</body>

</html>