<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resitration form</title>
    <style>
        p{
            color:red;
            text-align: center;
        }
        h1{
            color:green;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="connect.php" method="POST">
        <table align="center">
            <tr>
                <td>Enter the Donar Name:</td>
                <td>
                    <input type="text"  name="name" placeholder="Donar Name">
                </td>
            </tr>
            <tr>
                <td>Enter the Donar Blood Group:</td>
                <td>
                    <input type="text"  name="bloodgroup" placeholder="Donar blood group">
                </td>
            </tr>
            <tr>
                <td>Enter the Donar phone number:</td>
                <td>
                    <input type="phone"  name="phno" placeholder="Donar phone number">
                </td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>