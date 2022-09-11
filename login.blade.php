<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        /* css reset  */

@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body,
html {
    min-height: 100%;
    margin: 0;
}

body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(http://getwallpapers.com/wallpaper/full/0/4/c/122144.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    max-width: 100%;
}

.box {
    /* filter: blur(2px); */
    width: 20rem;
    height: 20rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: block;
    /* border: 2px solid red; */
    /* margin: 20px auto;
    padding: 14px 10px; */
    text-align: center;
    color: black;
    background-color: black;
    border-radius: 5px;
    opacity: 80%;
    background: linear-gradient(45deg, #ff0069, #000000);
    /* z-index: -1; */
    box-shadow: 10px 10px 6px 0px rgb(0, 0, 0, 0.7);
}

.box h1 {
    color: white;
    text-align: center;
    font-size: 2rem;
    font-weight: 500;
    text-transform: uppercase;
    /* z-index: 1; */
}

.box input[type="text"],
.box input[type="password"] {
    width: 12rem;
    border: 2px solid rgb(255, 255, 255);
    border-radius: 5px;
    text-align: center;
    margin: auto;
    margin-bottom: 30px;
    padding: 10px;
    outline: none;
    background: none;
    color: white;
    cursor: pointer;
    transition: 0.2s;
}

.box input[type="submit"] {
    width: 10rem;
    border: 2px solid rgb(0, 255, 224);
    border-radius: 23px;
    text-align: center;
    margin: auto;
    /* margin-bottom: 10px; */
    padding: 10px;
    outline: none;
    background: none;
    color: white;
    text-transform: uppercase;
}

.box input[type="submit"]:hover {
    background-color: transparent;
    color: aqua;
    transition: 0.2s;
    box-shadow: 0px 0px 20px 3px rgb(0, 255, 224);
}

.box input[type="submit"]:focus {
    background-color: transparent;
    color: aqua;
    transition: 0.2s;
    box-shadow: 0px 0px 20px 3px rgb(0, 255, 224);
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
    border: 2px solid rgb(0, 255, 224);
    box-shadow: 0px 0px 20px 1px rgb(0, 255, 224);
    transition: 0.2s;
}

@media screen and (max-width:800px) {
    .box {
        height: 17rem;
        width: 15rem;
    }
    .box input[type="text"],
    .box input[type="password"] {
        width: 8rem;
    }
    .box input[type="submit"] {
        width: 6rem;
        font-size: .61rem;
    }
    .box h1 {
        font-size: 1.5rem;
    }
}

@media screen and (max-width:320px) {
    .box {
        height: 18rem;
        width: 12rem;
    }
    .box input[type="text"],
    .box input[type="password"] {
        width: 6rem;
        padding: 0.5rem;
        font-size: 0.63rem;
    }
    .box input[type="submit"] {
        width: 5rem;
        height: 2rem;
        font-size: .51rem;
    }
    .box h1 {
        font-size: 1rem;
    }
}

@media screen and (max-width:200px) {
    .box {
        height: 17rem;
        width: 8rem;
    }
    .box input[type="text"],
    .box input[type="password"] {
        width: 3.8rem;
        /* padding: 0.4rem; */
        margin-top: 0.2rem;
    }
    .box input[type="submit"] {
        width: 3.6rem;
        font-size: .29rem;
    }
    .box h1 {
        font-size: 1rem;
    }
}
    </style>
</head>
<body>

    <form class="box" action="login_check" method="post">
        <h1>Login</h1>
        @csrf
        <div>
            <!-- <i class="user"></i> -->
            <input type="text" placeholder="Email" name="email"></div>
        <div>
            <!-- <i class="lock"></i> -->
            <input type="password" placeholder="Password" name="password"></div>
        <input type="submit" value="login" name="submit">
        <!-- <input type="reset" value="reset"> -->
        <br><br>
        <div>
            <a href="register" style="color: white">Register</a>
        </div>
    </form>

</body>
</html>
