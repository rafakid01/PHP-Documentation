<?php
include_once("header.php");

if (!isset($_SESSION['user']) && !isset($_SESSION['password'])) {
    header("Location: index.php");
}

$actualUser = $_SESSION['user'];

echo "Olá " . $actualUser;

?>

<?php if($_SESSION['user'] == "Admin" && $_SESSION['password'] == "senhaadm") : ?>
<button class="btn"><a href="dashboard.php">DashBoard</a></button>
<?php endif ?>

</body>

</html>
