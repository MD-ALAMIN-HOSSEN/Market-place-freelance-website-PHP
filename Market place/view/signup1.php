<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup1</title>
    <link rel="stylesheet" href="css1.css">
    
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