$containerName = 'apache-php-check-menu'

$migrationName = Read-Host -Prompt 'Input migration class name'

docker exec $containerName php spark make:migration $migrationName