<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="baru.css">
</head>

<body>
    <div class="tempat">
        <nav class="kepala">
            <a href="" class="logo"><i class="fas fa-heart"></i><span>Farmanusa</span></a>
            <div class="muka">
                <div class="navbar">
                    <div>
                        <a href="baru.php"><i class="fas fa-home"></i><span>Home</span></a>
                    </div>
                    <div>
                        <a href=""><i class="fa-solid fa-pills"></i><span>Obat<span></a>
                    </div>
                    <div>
                        <a href=""><i class="fas fa-user-md"></i><span>Apoteker</span></a>
                    </div>
                </div>
                <div class="user">
                    <a href="login-page.php"><i class="fas fa-user"></i><span>Login</span></a>
                </div>
            </div>
        </nav>
        <div><i id="menu-btn" class="fas fa-bars"></i></div>
    </div>

    <div>
    <section class="home">
        <table id='login_form' border=1>
            <br>
            <tr>
                <td class='tbtext' width=49%>Username</td>
                <td class='tbtext'>:</td>
                <td class='tbinput' widrh=49%><input type="text" name="username"/></td>
            </tr>
            <tr>
                <td class='tbtext'>Password</td>
                <td class='tbtext'>:</td>
                <td class='tbinput'><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit"
                    value="Login"> </td>
            </tr>
        </table>
    </section>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>