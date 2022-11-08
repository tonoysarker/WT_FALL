<?php
if(!isset($_COOKIE['authorized'])) {
    header('location: ../View/log_in.php?error=unauthorized_access');
}
$username = $_COOKIE['username'];
?>
<head>
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid; width: 100%">
        <tr>
            <th><h1>My Website</h1></th>
        </tr>
    </table>
    <table style="border: 1px solid; height:50%; width: 100%">
        <tr>
                <td><h1>Wecome, <?php echo $username ?> </h1></td>
        </tr>
    </table>
    <table style="border: 1px solid; text-align: center; width: 100%">
        <tr>
                <td><a href="../View/log_out.php">Log out</a></td>
        </tr>
    </table>
</body>
</html>