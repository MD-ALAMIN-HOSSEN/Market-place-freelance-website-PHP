<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login1</title>
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
        width: 50%;
        border: 1px solid #000;
        border-radius: 10px;
        margin: auto;
        padding: 30px;
    }

    .form-group {
        padding: 3px;
        margin: 10px;
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

    /* Style link as a button */
    .button-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #D9D9D9;
        color: #000;
        border: none;
        border-radius: 5px;
        text-decoration: none;

    }
    .link-normal {
        display: inline-block;
        padding: 10px 20px;
        color: #000;
        border: none;
        border-radius: 5px;
        text-decoration: none;

    }

    .links-space-bottom {
        margin: 20px;
    }
    </style>
</head>

<body>
    <form action="login2.php" method="post">
        <div class="form-group center ">
            <b>Name</b>
            <label for="" class="links-space-bottom">status =freeclancer</label>
        </div>
        <div class="form-group ">
            <label for="">abc@gamil.com</label>
        </div>
        <div class="form-group ">
        <a href="#" class="link-normal">Edit profile</a>
        </div>
        <div class="form-group ">
        <a href="#" class="link-normal">Change password</a>
        </div>
       
        <div class="form-group center">
            <!-- Style the link as a button -->
            <a href="../controller/sign_out.php" class="button-link">Sign out</a>
        </div>

    </form>
</body>

</html>