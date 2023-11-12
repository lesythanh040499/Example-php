<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border-radius: 5px;
        }
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(../image/background2.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
            font-family: sans-serif;
        }
        .container{
            position: relative;
            width: 400px;
            background: white;
            padding: 60px 40px;
            opacity: 85%;
        }
        header{
            font-size: 40px;
            margin-bottom: 60px;
            font-family: 'Montserrat' sans-serif;
        }
        .input-field, form .button{
            margin: 25px 0;
            position: relative;
            height: 50px;
            width: 100%;
        }
        .input-field input{
            height: 100%;
            width: 100%;
            border: 1px solid silver;
            padding-left: 15px;
            outline: none;
            font-size: 19px;
            transition: 0.4s;
        }
        input:focus{
            border: 1px solid #1DA1F2;
        }
        .input-field label{
            position: absolute;
            top: 50%;
            left: 15px;
            /* transform: translateY(-50%); */
            pointer-events: none;
            color: gray;
            font-size: 18px;
            transition: 0.4s;
        }
        input:focus ~ label,input:valid ~ label{
            transform: translateY(-33px);
            background: white;
            font-size: 16px;
            color: #1DA1F2;
        }
        form .button{
            margin-top: 30px;
            overflow: hidden;
            z-index: 111;
        }
        .button .inner{
            height: 100%;
            width: 100%;
            background: rgb(185, 182, 238);
            transition: 0.4s;
        }
        .button:hover .inner{
            background-color: rgb(65, 122, 245);
            border: 1px solid white;
            border-radius: 5px;
        }
        .button button{
        
            width: 100%;
            height: 100%;
            border: none;
            background: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        .container .conten{
            margin: 35px 0 20px 0;
            font-size: 19px;
            color: grey;
        }
        .link{
            display: flex;
            cursor: pointer;
        }
        .facebook, .google{
            height: 40px;
            width: 100%;
            border: 1px solid silver;
            border-radius: 3px;
            margin: 0 10px;
            transition: .4s;
        }
        .link i{
            font-size: 23px;
            line-height: 40px;
            margin-left: -90px;
        }
        .link span{
            position: absolute;
            font-size: 17px;
            font-weight: bold;
            padding-left: 8px;
            font-family: 'Open Sans', sans-serif;
        }
        .facebook i, .facebook span{
            color: #4267B2;
        }
        .google i, .google span{
            color: #dd4b39;
        }
        .facebook:hover{
            border: 1px solid #4267B2;
        }
        .google:hover{
            border: 1px solid #dd4b39;
        }
        .sigup{
            margin-top: 50px;
            font-family: segoe ui light;
            font-size: 20px;
        }
        .sigup a{
            color: #3498db;
            text-decoration: none;
        }
        .sigup a:hover{
            text-decoration: underline;
        }
        .input-field label, span.show{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        span.show{
            right: 20px;
            color: #111;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            user-select: none;
            visibility: hidden;
            font-family: 'Open Sans', sans-serif;
        }
        input:valid ~ span.show{
            visibility: visible;
        }
        .alert.alert-danger {
            font-family: segoe ui light;
            font-size: 20px;
            color: red;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
			
        <header>Loginn</header>
        <form action="../xuli/xulilogin.php" method="POST">
            <div class="input-field">
                <input name="user" type="text" required>
                <label for="">Username</label>
            </div>
            <div class="input-field" >
                <input name="password" class="pw" type="password"required>
                <span class="show"><i class="fa fa-eye" aria-hidden="true"></i></span>
                <label for="">Password</label>
            </div>
            <div class="button">
                <div class="inner">
                    <button class="button1" type="submit" name = login-submit>Login</button>
                </div>               
            </div>
        </form>
        <div class="conten">Or login with</div>
        <div class="link">
            <div class="facebook">
                <i class="fa fa-facebook-square" aria-hidden="true"><span>Facebook</span></i>
            </div>
            <div class="google">
                <i class="fa fa-google-plus-square" aria-hidden="true"><span>Google</span></i>
            </div>
        </div>
        <div class="sigup">
            Not a member? <a href="sigup.php">Signup now</a>
        </div>
    </div>

    <script>
        var x = document.querySelector('.pw');
        var y = document.querySelector('.show');
        y.addEventListener('click',active);
        function active(){
            if(x.type === 'password'){
                x.type = 'text';
                y.style.color = "#1DA1F2";
            }else{
                x.type ='password';
                y.style.color = "#111";
            }
        }
    </script>
</body>
</html>