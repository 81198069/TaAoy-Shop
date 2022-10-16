
<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];
            
        
            if ($_SESSION['userlevel'] == 'a') {
                header("Location: admin_page.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: /web/index1.php");
            }
        } else {
                echo "<script type='text/javascript'>alert('User ຫຼື Password ບໍ່ຖືກຕ້ອງ');
                window.location='index.php';
                </script>";
        }
    }

?>