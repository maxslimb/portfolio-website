<?php
  
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = Mailgun::create('', 'https://API_HOSTNAME');
$domain = "kishanpatel.tech";
$params = array(
  'from'    => 'mailgun@kishanpatel.tech',
  'to'      => 'kpatel3032@gmail.com',
  'subject' => $_POST['name'] + $_POST['email'] + $_POST['subject'],
  'text'    => $_POST['message']
);

# Make the call to the client.
$mgClient->messages()->send($domain, $params);
 
?>
