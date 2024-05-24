<?php
session_start();
session_unset();
session_destroy();

header("Location: index.php");
die();

// in script contenenti solo php si può omettere il closing tag, anzi considerato buona pratica
/* ?> */