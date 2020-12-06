<?php
// +------------------------------------------------------------------------+
// | @author Monjur Munna (Monjur Munna)
// | @author_url 1: https://imean.xyz   
// +------------------------------------------------------------------------+
// | iMean - Social Networking Platform
// | Copyright (c) 2019 iMean. All rights reserved.
// +------------------------------------------------------------------------+
require 'assets/libraries/PHPMailer-Master/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;