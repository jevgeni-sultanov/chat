<?php

// Chatroom log out:
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header("Location: ./");
exit();
