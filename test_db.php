<?php
$db = oci_connect('hr', 'hr', 'hr.projektwifi');
if($db==true)
echo "OK connect";
else echo "NOK connect";

