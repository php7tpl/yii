@echo off

set rootDir="%~dp0/../.."
set phpunit="vendor/phpunit/phpunit/phpunit"
set eloquentBinDir=%rootDir%/vendor/php7lab/eloquent/bin

cd %eloquentBinDir%
php console_test db:delete-all-tables --withConfirm=0

cd %rootDir%
php yii_test migrate --interactive=0

php %phpunit%
pause