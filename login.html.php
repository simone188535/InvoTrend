<!DOCTYPE html>
<html>
    <head>
        <title>InvoTrend</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <style>

            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background: url("../img/cube_in_water_darker.jpg") no-repeat;
                background-size: cover;
            }
            /* ALL THE CODE FOR THE NAV BAR HERE */
            
            nav{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100px;
                padding: 10px 100px;
                box-sizing: border-box;
                transition: .3s;
            }

            nav.black{
                background: rgba(0,0,0,0,0.8);
                height: 100px;
                padding: 10px 100px;
            }
            
            nav .logo{
                padding: 22px 20px;
                height: 80px;
                float: left;
                font-size: 200px;
                transition: all 0.5s ease;
            }

            nav .logo:hover{
                padding: 22px 20px;
                height: 80px;
                float: left;
                font-size: 200px;
                color: orange;
            }

            nav ul{
                list-style: none;
                float: right;
                margin: 0;
                padding: 0;
                display: flex;
            }

            nav ul li a {
                line-height: 80px;
                color: white;
                float: left;
                padding:0 30px;
                text-decoration: none;
                text-transform: uppercase;
                outline: none;
                transition: all 0.5s ease;
            }

            nav ul li a:hover{
                background: black;
                background: #38b9a1;
                border-radius: 15px;
            }

            nav ul li a#active{
                /* background: #fddee4; */
                color: #fddee4;
                background: #38b9a1;
                border-radius: 15px;
                /* border: 2px solid white; */
            }



            /* .wrapper{
                border: 2px solid;

            } */
            

            /* ALL THE CODE FOR THE BANNER HERE: */
            
            #banner{
                width: 100%;
                text-align: center;
                margin-top: 120px;
                font-size: 100px;
                font-family:sans-serif;
                color: #fddee4;
                /* border: 2px solid white; */
            }

            /* ALL THE CODE FOR THE FORM HERE: */

            #form{
                /* border: 4px solid ; */
                width: 280px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 8px;
                color:white;
            }
            #form h1{
                float: left;
                font-size: 40px;
                border-bottom: 4px solid #009688;
                margin-bottom: 50px;
                padding: 13px 0;
            }
            #textbox{
                width: 100%;
                overflow: hidden;
                font-size: 20px;
                padding: 8px 0;
                margin: 8px 0;
                border-bottom: 1px solid #009688;
            }
            #textbox i{
                width: 26px;
                float: left;
                text-align: center;
            }

            #textbox input{
                border: none;
                outline: none;
                background: none;
                color: white;
                font-size: 18px;
                width: 80%;
                float: left;
                margin: 0 10px;
            }

            #btn{
                width: 100%;
                background:none;
                transition: background-color 0.7s ease;
                border: 2px solid #009688;
                color: white;
                padding: 5px;
                font-size: 18px;
                cursor: pointer;
                text-align: center;
                margin: 12px 0;
            }

            #btn:hover{
                width: 100%;
                /* background: none; */
                border: 2px solid #009688;
                color: white;
                padding: 5px;
                font-size: 18px;
                cursor: pointer;
                text-align: center;
                background-color: black;
            }

        </style>
        
    </head>
    <body>
        <div class='Container'>
            
            <div class='wrapper'>
                <nav>
                    <div class="logo"><i class="fab fa-drupal"></i></div>
                    <ul>
                        <!-- <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li> -->
                        <!-- <li><a id='active' href="#">Log in</a></li> -->
                    </ul>
                </nav>
            </div>
            <div id='banner'>
                <label for='banner'>INVOTREND</label>
            </div>
            <div id='form'>
                <h1>Login</h1>
                <form action='test.php' method='POST'>
                    <div id="textbox">
                        <i class="fas fa-user"></i>
                        <input type='text' name='username' placeholder="Username" id='username'>
                    </div>
                    <div id="textbox">
                        <i class="fas fa-lock"></i>
                        <input type='password' name='password' placeholder="Password" id='password'>
                    </div>
                    <!-- <br>
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
                     -->
                    <input id='btn' type='submit' value="Sign in">
                    <input id='btn' type='submit' value="Sign Up">
                </form>
            </div>
        </div>
    </body>
</html>