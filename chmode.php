<?php
exec ("find /path/to/folder -type d -exec chmod 0750 {} +");
exec ("find /path/to/folder -type f -exec chmod 0644 {} +");
?>