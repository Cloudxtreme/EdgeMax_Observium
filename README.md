# edgeos.inc.php
FIXED: Current implementation of Observium does not support the new sysobjectid provided by the Ubiquiti EdgeRouter Pro / EdgeMax. This patch is to ensure Observium sees the EdgeRouter as 'edgeos' and not 'generic'. Once it sees it properly, it will use the UBNT MIB.
```
This is a patched version for placement: /opt/observium/includes/discovery/os/edgeos.inc.php
```
Installation:
Replace your current edgeos.inc.php at the directory listed, with this repository version
File / default location to replace: 
```
/opt/observium/includes/discovery/os/edgeos.inc.php
```
Replace the file and ensure permissions are readable by the webserver. Default - www-data

After replacing the file, it is best to update the discovery. This is the same procedure followed after an update to Observium.
```
Execute: /opt/observium/discovery.php -h all
or 
/opt/observium/discovery.php -h [Replace with name of server in observium. No brackets]
```
After patching and running discovery.php, you should see the version be picked up properly in the log.

Example:
```
System OS changed: generic -> edgeos
```
