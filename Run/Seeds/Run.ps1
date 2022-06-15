$containerName = 'apache-php-check-menu'

$seedName = Read-Host -Prompt 'Input seed name'

docker exec $containerName php spark db:seed $seedName