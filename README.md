## Install

### Config

* copy `orsee/msmtprc.example` to `orsee/msmtprc` and adjust the mail settings.
* copy `orsee/settings.example.php` to `orsee/settings.php` and adjust the orsee settings.
* copy `docker-compose.override.example.yml` to `docker-compose.override.yml` and adjust the docker settings.

To use `msmtp` instead of sendmail, set the path to msmtp `/usr/bin/msmtp` in the orsee admin ui (`admin/options_edit.php?otype=general`) and set the `Type of sending emails` to `indirect`.

### Data import

On your first start set up the mysql database with the following command: `docker exec -i [orsee_database_1] mysql -u[orsee] -p[123456] orsee < orsee/install.sql`. Please check the variables in [brackets].

### Email

Config file `msmptrc` example file:

```
defaults
logfile        ~/.msmtp.log

account        wiwi
host           smtp.wiwi.uni-wuppertal.de
from           support@wiwi.uni-wuppertal.de

account default : wiwi
```
