# edgeos.inc.php
FIXED: Current implementation of Observium does not support the new sysobjectid provided by the Ubiquiti EdgeRouter Pro / EdgeMax. 

This is a patched version for placement: /opt/observium/includes/discovery/os/edgeos.inc.php

Installation:
Replace your current edgeos.inc.php at the directory listed, with this repository version
File / default location to replace: 
/opt/observium/includes/discovery/os/edgeos.inc.php

Replace the file and ensure permissions are readable by the webserver. Default - www-data
