<html>
<head>
    <title> Form </title>
</head>
    <body>
        <h1> ADD STUDENT </h1>
        <form action="action_page.php" method="POST">
            <table border="1">
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td> Name: </td>
                    <td> <input type="text" name="name" placeholder="Enter Full Name"> </td>
                </tr>
                <tr>
                    <td> Gender: </td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male <br>
                        <input type="radio" name="gender" value="female"> Female <br>
                </tr>
                <tr>
                    <td> Country: </td>
                    <td>
                        <select name="country">
                            <option value="Select Country">Select Country</option>
                            <option value="PH">Philippines</option>
                            <option value="AUS">Australia</option>
                            <option value="US">United States</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input style="backgroud = blue" type="submit" name= "submit" value="Save">
                    </td>
                </tr>
            </table>
        </form>
    
    </body>
</html>