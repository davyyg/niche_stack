

@servers(['localhost' => '127.0.0.1', 'www' => ['advancew@152.44.45.11']])

{{-- envoy run deploy --}}
@task('deploy', ['on' => 'www'])
    cd xampp/htdocs/aws_admin
    php artisan down --message="Deploying New Code"
    git pull origin master
    composer install --optimize-autoloader --no-dev
    php artisan config:clear
    php artisan config:cache
    php artisan route:clear
    php artisan route:cache
    npm install --production
    php artisan migrate --force
    php artisan up
@endtask