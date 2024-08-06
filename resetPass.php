<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="rsc">
        <div>reset password</div>
        <form action="" method="POST">
            <table>
                <tr>
                    <th><input type="email" name="email" id="email" placeholder="enter email here...."></th>
                </tr>
                <br>
                <tr>
                    <th><input type="tel" name="phone" id="phone" placeholder="enter phone number here..."></th>
                </tr>
                <br>
                <tr>
                    <th><input type="password" name="password" id="password" placeholder="enter password here..."></th>
                </tr>
                <br>
                <tr>
                    <th><input type="submit" name="reset" id="reset"></th>
                </tr>
            </table>
        </form>
    </div>
    <?php
        $myconn=mysqli_connect("localhost","root","","kartt");
        if(isset($_POST['reset'])){
            $em=$_POST['email'];
            $ph=$_POST['phone'];
            $ps=$_POST['password'];
            $q="select * from users where email='$em' or phone='$ph'";
            $rec=mysqli_query($myconn,$q);
            if(mysqli_num_rows($rec)>0){
                $q="update users set password='$ps' where email='$em'";
                mysqli_query($myconn,$q);
                header("Location: http://localhost/kart/users.php");
            }
            else{
                echo "not found";
            }
        }
    ?>
</body>
</html>