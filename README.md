# EdgeMax_Observium
Patch to add Ubiquiti EdgeMax (ERPro) support to Observium

This is a patched /opt/observium/includes/discovery/os/edgeos.inc.php

Current implementation of Observium does not support the new sysobjectid provided by the EdgeRouter Pro. 

To Install:
Replace your current edgeos.inc.php at the directory listed, with this repository version
File / location to replace: observium/includes/discovery/os/edgeos.inc.php

Simply replace and ensure persmissions are still readable.
