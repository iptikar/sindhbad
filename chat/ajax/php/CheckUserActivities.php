<?php

// Start the session 
session_start();

// Required the file 
require('functions.php');

DestroySessionInserting('chat_session', 'chat-started-at', 120);
