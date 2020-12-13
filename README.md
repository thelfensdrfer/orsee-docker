## Install

Copy `orsee/settings.example.php` to `orsee/settings.php` and adjust the settings.

Copy `docker-compose.override.example.yml` to `docker-compose.override.yml` and adjust the settings.

On your first start set up the mysql database with the following command: `docker exec -i [orsee_database_1] mysql -u[orsee] -p[123456] orsee < orsee/install.sql`. Please check the variables in [brackets].
