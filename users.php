<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav class="navbar">
        <div id="mk">mykart</div>
        <ul class="u_l">
            <li class="list"><a href="" class="anchor">Home</a></li>
            <li class="list"><a href="" class="anchor">Product</a></li>
            <li class="list"><a href="" class="anchor">YourKart</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="con">
        <div id="effect"></div>
        <div class="bond">
            <div class="btn" id="reg">registration</div>
            <div class="btn" id="log">login</div>
        </div>

        <form action="" method="POST" id="frm" onsubmit="return fav()">
            <table>
                <tr>
                    <th><label for="name" class="lbl">name</label></th>
                    <th><input type="text" id="name" class="ib" name="name"></th>
                    <th><p class="error" id="e2"></p></th>     
                </tr>
                <br>
                <tr>
                    <th><label for="email" class="lbl">email</label></th>
                    <th><input type="email" id="email" class="ib" name="email"></th>
                    <th><p class="error" id="e3"></p></th>
                </tr>
                <br>
                <tr>
                    <th><label for="phone" class="lbl">phone</label></th>
                    <th><input type="tel" id="phone" class="ib" name="phone"></th>
                    <th><p class="error" id="e4"></p></th> 
                </tr>
                <br>
                <tr>
                    <th><label for="password" class="lbl">password</label></th>
                    <th><input type="password" id="password" class="ib" name="password"></th>
                    <th><p class="error" id="e5"></p></th>
                </tr>
                <br>
            </table>
            <input type="submit" id="sub1" class="sub" name="submit">
        </form>
        <form action="" method="post" id="frm2">
            <table>
                <tr>
                    <th><label for="eml" class="lbll">email</label></th>
                    <th><input type="email" id="eml" class="ib" name="eml"></th>
                </tr>
                <tr>
                    <th><h1 style="margin-left: 200px;position: absolute; margin-top: -20px; color: red;">or</h1></th>
                </tr>
                <br>
                <tr>
                    <th><label for="phn" class="lbll">phone</label></th>
                    <th><input type="tel" id="phn" class="ib" name="phn"></th>
                </tr>
                <br>
                <tr>
                    <th><label for="passwordd" class="lbll">password</label></th>
                    <th><input type="password" id="passwordd" class="ib" name="passwordd"></th>
            
                </tr>
                <br>
                <tr>
                    <th><input type="submit" id="sub2" class="subb" name="login" value="login"></th>
                    <th><a href="resetPass.php" id="sub4">resetP</a></th>

                </tr>

            </table>
        </form>
    </div>
</main>

<?php
    $myconn=mysqli_connect("localhost","root","","kartt");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $q="insert into users values('$name','$email','$phone','$password')";
        mysqli_query($myconn,$q);
    }

    if(isset($_POST['login'])){
        $e=$_POST['eml'];
        $ph=$_POST['phn'];
        $ps=$_POST['passwordd'];
        if($e==""){
            $q="select * from users where phone='$ph' and password='$ps'";
        }
        else if($ph==""){
            $q="select * from users where email='$e' and password='$ps'";
        }
        else{
            $q="select * from users where email='$e' or phone='$ph' and password='$ps'";
        }
        $rec=mysqli_query($myconn,$q);
        if(mysqli_num_rows($rec)>0){
            header("Location: http://localhost/kart/login.php");
        }
        else{
            header("Location: http://localhost/kart/fail.php");
        }
    }

?>

<script src="action.js"></script>
</body>
</html>