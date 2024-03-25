<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup1</title>
    <style>
    body {
        display: flex;
        font-size: 30px;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    table {
        margin: auto;      
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
    
    label {
        font-size: 40px; /* Adjust the text size for labels */
    }

    button {
        font-size: 35px; /* Adjust the text size for buttons */
    }
    </style>
</head>

<body>
    <Form action="signup2.php" method="post">
        <table>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <label>join as client or freelancer</label>
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td class="option">
                    <input type="radio" name="type" id="client" value="buyer" required>
                    <label for="client">I ama a client hiring for a project</label><br> 
                </td>
                <td class="option">
                    <input type="radio" name="type" id="freelancer" value="seller" required> 
                    <label for="freelancer">I am a freelancer looking for job</label><br>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;" class="center">
                    <br>
                    <button type="submit" value="submit">Submit</button>
                </td>
            </tr>
        </table>
    </From>
</body>

</html>