@servers(['localhost' => '127.0.0.1'])

@task('deploy')
    cd /var/www/html/gitlab-laravel
    git pull origin main
    composer install --no-dev
    php artisan migrate --force
@endtask
