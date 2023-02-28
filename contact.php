<?php
  
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
echo $_ENV['API_KEY'];
$mgClient = Mailgun::create($_ENV['API_KEY']);
$domain = "kishanpatel.tech";
$params = array(
  'from'    => 'mailgun@kishanpatel.tech',
  'to'      => 'kpatel3032@gmail.com',
  'subject' => 'test1',
  'text'    => 'kishan'
);

# Make the call to the client.
$mgClient->messages()->send($domain, $params);
 
?>
