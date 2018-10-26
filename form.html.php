<!DOCTYPE html>
<html>
    <head>
        <title>InvoTrend</title>
        <style>
            form{
                font-family: Calibri;
                font-weight: bold;
            }
            h1{
                text-align: center;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
            }
            #form{
                margin: 0 auto;
                width: 250px;
                background-color: aquamarine;
                border: 3px solid #73AD21
            }
            .Container{
                background-color: bisque
            }
        </style>
    </head>
    <body>
        <div class='Container'>
            <h1>My Form Practice</h1>
        
            <div id='form'>
                <form action='test.php' method='POST'>
                    <label for='username'>User Name:</label>
                    <br>
                    <input type='text' name='username' id='username'>
                    <br>
                    <label for='firstname'>First Name:</label>
                    <br>
                    <input type='text' name='firstname' id='firstname'>
                    <br>
                    <label for='lastname'>Last Name:</label>
                    <br>
                    <input type='text' name='lastname' id='lastname'>
                    <br>
                    <label for='age'>Age:</label>
                    <br>
                    <input type='text' name='age' id='age'>
                    <br>
                    <label for='address'>address:</label>
                    <br>
                    <input type='text' name='address' id='address'>
                    <br>
                    <label for='gender'>Gender:</label>
                    <select name="gender">
                        <option value="M">male</option>
                        <option value="F">female</option>
                        <option value="other">other</option>
                        <option value="Do not want to say">Do not want to say</option>
                    </select>
                    <br><br>
                    <input type='submit' value="Submit">
                </form> 
            </div>
        </div>
    </body>
</html>