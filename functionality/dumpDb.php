<?php
exec('mysqldump --user=admin --password=password --host=localhost my_db > /var/www/mydomain.com/public_html/storage/dump_db.sql');
header('location:/index.php');