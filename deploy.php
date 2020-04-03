<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'jcchevalier.fr');

// Project repository
set('repository', 'git@github.com:jcchevalier/jcchevalier.fr.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('jcchevalier.fr')
    ->set('deploy_path', '/var/www/jcchevalier.fr');

// Tasks

task('npm:install', function () {
    run('cd {{release_path}} && npm install');
});

task('npm:run', function () {
    run('cd {{release_path}} && npm run production');
});

task('yolo', [
    'deploy',
    'npm:install',
    'npm:run',
]);

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
