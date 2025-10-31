<?php
// Página de logout 
session_start();
session_destroy(); // Destroi a sessão do usuário
header("Location: 15d_desafio_login.php");
exit();
?>