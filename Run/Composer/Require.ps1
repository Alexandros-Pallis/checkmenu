$containername = 'apache-php-check-menu'

$packageName = Read-Host -Prompt 'Input composer package to require'

docker exec $containername composer require $packageName