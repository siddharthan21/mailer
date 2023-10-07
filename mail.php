<?php
require_once './vendor/autoload.php';
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
$transport = Transport::fromDsn('smtp://monkey.d.luffy6867@gmail.com:fzdwwabubecofjli@smtp.gmail.com:587');
$mailer = new Mailer($transport);
$email = (new Email());
$otp = 212121;
$email->from('monkey.d.luffy6867@gmail.com');
$email->to(
    'siddharthan44@gmail.com',
    'siddharthan.k2021@vitstudent.ac.in'
);
$email->subject('A Cool Buddyy !! Happy to Tell You that <!> Just Your Phone Got Hacked !! ');
$email->text('The plain text version of the message.');
$email->html('
    Hello MR.karthikeyan We have your all goolge password kindily obey my order next mail will be send after 350min ..
    thankyou Buddy
');
try{
    $mailer->send($email);
    die('<style> * { font-size: 100px; color: #444; background-color: #4eff73; } </style><pre><h1>&#127881;Email sent successfully!</h1></pre>');
}catch (TransportExceptionInterface $e) {
    print_r("Something Went Wrong!!");
}