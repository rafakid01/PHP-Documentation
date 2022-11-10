<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
?>

<P>Você visitou essa página <?= $_SESSION['count'] ?> vezes</P>
<?php
