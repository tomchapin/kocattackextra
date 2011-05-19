Installation steps:

1. Copy all the files (including the /script_cache/ folder) to your web server.
2. Set the /script_cache/ folder to full read/write permissions (0777 or some such).
2. Set up a MySQL database and import the "2011.05.10.autoupdater_stats.sql" file, which will create the database structure.
3. Edit the database_connection.php file and input your database connection information.
4. Done!