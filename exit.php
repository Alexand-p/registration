<?php

setcookie('user', $user['name'], time() - 7200 * 12,  "/");

header('Location: / ');