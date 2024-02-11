<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Registration Form</title>
</head>
<body>
    <h3>Workhop Registration Form</h3>
    <form action="" method="post">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br>
            <label for="company">Company/Institute:</label>
            <input type="text" id="Cname" name="Cname"><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br><br>

            <label for="gender">Gender :</label>
            <input type="radio" name="sex" value="Male">Male 
            <input type="radio" name="sex" value="Female">Female <br>

            <label for="email">Email: </label>
            <input type="email" id="email" name="email"><br>
            <label for="monbile">Mobile Number:</label>
            <input type="mobile" id="mobile" name="mobile"><br>
            <label for="Wtype">Workshop Type:</label>
            <input list="Wtype" name="Wtype">
                <datalist id="Wtype">
                    <option value="Excel">
                    <option value="Word">
                    <option value="Powerpoint">
                </datalist><br>

            <b>Available Time Frame</b><br>
            


    </form>
</body>
</html>