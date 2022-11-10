<?php

session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

?>

<p>Você visitou essa página <?= $_SESSION['count'] ?> vezes</p>
<br>
<p>Para continuar, clique <a href="nextpage.php"><?= htmlspecialchars(SID); ?>aqui</a></p>