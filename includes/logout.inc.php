<?php
ini_set("session.cookie_samesite", "lax");
session_start();
session_unset();
session_destroy();

header("Location: ../");