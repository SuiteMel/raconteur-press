# raconteur-press

Start site for development with `npm run dev`, ensure functions.php 'IS_VITE_DEVELOPMENT' is true.
To view production site `npm run build` and update functions.php 'IS_VITE_DEVELOPMENT' to false.

For Local by Flywheel
Run log output in terminal (no previous lines) `tail -f -n 0 error.log`
Stop apache server if port conflict `sudo service apache2 stop`
More resources
Check if anything is listening `sudo lsof -i:80`
[Apache Server Stop](https://phoenixnap.com/kb/ubuntu-start-stop-restart-apache#ftoc-heading-3)
[Logging in Command Console](https://www.linuxfoundation.org/blog/blog/classic-sysadmin-viewing-linux-logs-from-the-command-line)