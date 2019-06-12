<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\MySQL;

$db = MySQL::getInstance();

$db->deletePost($_POST);

setcookie('action', 'Post deleted successfully!', 0, '/');

if (headers_sent()) {
    die('<script type="text/javascript">window.location="/index.php"</script>');
} else {
    header('Location: /index.php');
    die();
}
