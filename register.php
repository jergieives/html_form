<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="action_page.php" method="post"> 
            <table Border="1" cellspacing="5">
                <th> Question </th>
                <th> Answer </th>

                <tr>
                    <td> Name </td>
                    <td> <input type="text" name="name"> </td>
                </tr>

                <tr> 
                    <td> Gender </td>
                    <td> <input type="radio" name="gender" value="male">Male
                         <input type="radio" name="gender" value="female">Female </td>
                </tr>

                <tr>
                    <td> Country </td>
                    <td> <select name="country"> 
                        <option value="PH">Philippines</option> 
                        <option value="AUS">Australia</option>
                        <option value="US">United States</option> </select> </td>
                </tr>

                <tr>
                    <td colspan="2" Align="right"> <input type="submit" name="Save" value="Save"> </td>
                </tr>
            </table>
        </form>      
    </body>
</html>