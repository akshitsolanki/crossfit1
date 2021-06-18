<?php
session_start();
session_destroy();
echo "You Have Been Logged Out. <a href='../../index.html'>Go Back</a>";