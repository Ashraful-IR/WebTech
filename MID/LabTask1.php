<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1 style="color:Blue">AIUB</h1>
        <h3 style="color:Blue">Registration Form</h3>
        <tr>
            <td>
                <h3 style="color:Red"><i>Comeplete the Registration</i></h3>
            </td>
        </tr>
    </center>

    <table align="center">


        <tr>
            <td>
                <b>Full Name:</b>
            <td><input type="text"></td>
            </td>
        </tr>

        <tr>
            <td>
                <b>Email:</b>
            <td><input type="text"></td>
            </td>
        </tr>

        <tr>
            <td>
                <b>Pasword:</b>
            <td><input type="text"></td>
            </td>
        </tr>

        <tr>
            <td>
                <b>Gender:</b>
            <td> <input type="radio" name="des">Male <input type="radio" name="des">Other</td>
            </td>
        </tr>

        <tr>
            <td>
                <b>Language Known:</b>
            <td><input type="checkbox" name="des">English <input type="checkbox" name="des">Bangla <input
                    type="checkbox" name="des">Hindi</td>
            </td>
        </tr>
        <tr>
            <td> <b>Date of Birth:</b></td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td> <b>Country:</b></td>
            <td>

                <select name="Counry" id="Select">
                    <option value="Bangadesh">Bangadesh</option>
                    <option value="Usa">USA</option>
                    <option value="UK">UK</option>

                </select>
            </td>
        </tr>

        <tr>
            <td><b>Upload photo:</b></td>
            <td><input type="file"></td>
        </tr>

        <tr>
            <td><b>Comments:</b></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="button">Register</button></td>
        </tr>

    </table>

</body>

</html>