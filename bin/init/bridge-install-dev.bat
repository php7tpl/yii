@echo off
cd ../..
php yii migrate --migrationPath=@Zelenin/yii/modules/I18n/migrations --interactive=0
php yii migrate --migrationNamespaces=Da\\User\\Migration --interactive=0
php yii migrate --migrationPath=@yii/rbac/migrations --interactive=0
php yii migrate --migrationPath=@bridge-migrations --interactive=0
pause