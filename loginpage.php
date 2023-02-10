<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login @ Sacred Plate</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/2157336164.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            /* /* display: flex;
            justify-content: center;
            align-items: center; */
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
        
        .main {
            width: 350px;
            height: 550px;
            background: red;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        }
        
        #chk {
            display: none;
        }
        
        .signup {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        label {
            color: #fff;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }
        
        input {
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }
        
        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #573b8a;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }
        
        button:hover {
            background: #6d44b8;
        }
        
        .login {
            height: 460px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: .8s ease-in-out;
        }
        
        .login label {
            color: #573b8a;
            transform: scale(.6);
        }
        
        #chk:checked~.login {
            transform: translateY(-500px);
        }
        
        #chk:checked~.login label {
            transform: scale(1);
        }
        
        #chk:checked~.signup label {
            transform: scale(.6);
        }
        
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
            list-style-type: none;
            background-color: #212121;
            font-family: "Drama Regular";
            height: 80px;
        }
        
        .navbar ul li {
            display: inline-block;
        }
        
        .navbar ul li a {
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            display: block;
            padding: 25px 20px;
            font-size: 13px;
            letter-spacing: 5px;
            transition-duration: 0.5s;
        }
        
        .navbar ul li a:hover {
            color: lightblue;
        }
        
        .main2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        footer {
            background-color: black;
            color: aliceblue;
            width: 100%;
            height: 80px;
            bottom: 0;
            margin: 0 auto;
            text-align: center;
        }
        
        i {
            color: aliceblue;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html>

    <head>
        <title>Slide Navbar</title>
        <link rel="stylesheet" type="text/css" href="slide navbar style.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="recipes.html">Recipe</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="feedback.html">Feedback</a></li>
            </ul>
        </div>
        <div class="main2">
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form>
                        <label for="chk" aria-hidden="true">Sign up</label>
                        <input type="text" name="txt" placeholder="User name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="pswd" placeholder="Password" required="">
                        <input type="password" name="cnfpswd" placeholder="Confirm Password" required="">
                        <button>Sign up</button>
                    </form>
                </div>

                <div class="login">
                    <form>
                        <label for="chk" aria-hidden="true">Login</label>
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="pswd" placeholder="Password" required="">
                        <button>Login</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        $conn=mysqli_connect('localhost:3306','root','rohit123','sacredplate');
        if(!$conn)
        {
            die('could not connect:'.mysqli_error());
        }
        echo'connected successfully!';
        ?>
        <footer>
            The Sacred Plate | Follow us at:
            <a href="https://www.facebook.com/"><i class="fab fa-2x fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-2x fa-instagram"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-2x fa-twitter"></i></a>
            <br><br>

            <a href="#">Privacy Policy</a> &ensp;&ensp;&ensp;
            <a href="#">Terms</a>
        </footer>
    </body>

    </html>