$containerName = 'apache-php-check-menu'
$workDir = '/var/www/html'
$projectPath = Resolve-Path -Path ((Get-Item $PSScriptRoot).Parent.Parent)
$sourePath = Resolve-Path -Path $projectPath/Source
$appPath = Resolve-Path -Path $sourePath/$appPath
$modelToMake = Read-Host -Promt "Enter controller name..."
docker exec -it -w $workDir $containerName bash -c "php spark make:controller $($modelToMake)"