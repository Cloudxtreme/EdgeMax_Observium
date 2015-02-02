<?php

/**
 * Observium
 *
 *   This file is part of Observium.
 *
 * @package    observium
 * @subpackage discovery
 * @copyright  (C) 2006-2014 Adam Armstrong
 *
 * Patched for EdgeMax implementation : 02/02/2015
 * Added EdgeMax/EdgeOS/EdgeSwitch
 * Kevin Hatfield - khatfield@socllc.net
 */

if (!$os)
{
  if (preg_match("/^Edge(Max|OS|Switch)/", $sysDescr)) { $os = "edgeos"; }
}

// EOF
