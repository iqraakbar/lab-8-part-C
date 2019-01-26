<?php
print "Your IP address is ".$_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."\n";
}
?>