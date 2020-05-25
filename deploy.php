<?php
namespace Deployer;

require 'recipe/yii2-app-basic.php';
// Configuration

set('repository', 'git@gitlab.com:rocketfirm/highvill.git');

set('bin/php', function () {
    return '/opt/plesk/php/7.2/bin/php';
});

// Shared files/dirs between deploys
add('shared_dirs', [
    'vendor',
    'backend/web/assets',
    'frontend/web/assets',
    'common/runtime',
    'console/runtime',
    'api/runtime',
    'backend/runtime',
    'frontend/runtime',
    'environments',
]);

// Writable dirs by web server
add('writable_dirs', [
    'backend/web/assets',
    'frontend/web/assets',
    'common/runtime',
    'console/runtime',
    'api/runtime',
    'backend/runtime',
    'frontend/runtime',
]);

// Delete paths
//add('clear_paths', ['frontend']);

set('allow_anonymous_stats', false);

set('git_tty', false); // [Optional] Allocate tty for git on first deployment
set('ssh_multiplexing', false);

/** @var $userProduction    string username for production host    */
$userProduction = getenv('USER_PRODUCTION') ?: 'admin';
/** @var $userStage         string username for stage host         */
$userStage = 'rocketman';

// Hosts

//host('project.com')
//    ->stage('prod')
//    ->user($userProduction)
//    ->set('deploy_path', '/var/www/project.com');
    
host('rocketfirm.net')
    ->stage('stage')
    ->user($userStage)
    ->set('env', [
        'COMPOSER_MEMORY_LIMIT' => -1,
    ])
    ->set('branch', 'task-28')
    ->set('http_user', 'rocketman')
    ->set('http_group', 'pascln')
    ->set('deploy_path', '/var/www/vhosts/rocketfirm.net/dev-highvill.rocketfirm.net')
    ->set('keep_releases', 3);


// Tasks

task('deploy:config', function () {
//    $stage = get('stage');
//    run("echo '{$stage}' > {{release_path}}/config/mode.php");
//    run("cat {{release_path}}/config/mode.php");
})->desc('Set application stage config');
after('deploy:update_code', 'deploy:config');

//task('deploy:run_migrations', function () {
//    run('cd {{release_path}} && php yii migrate --interactive=0');
    // Add your migrations here ...
//})->desc('Run migrations');

/*
 * Uncomment code below if OPCache is on for php-fpm
 *
desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});
after('deploy:symlink', 'php-fpm:restart');
*/

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Run clear_paths task
after('success', 'deploy:clear_paths');