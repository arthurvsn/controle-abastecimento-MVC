<?php

	echo "Senhas erradas";
	header('Location: /edit/'.$_SESSION['user_id']);
    exit;
?>