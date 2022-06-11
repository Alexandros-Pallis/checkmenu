$containerName = 'apache-php-check-menu'
$volumeContainerPath = "/var/www/html"
$projectPath = Resolve-Path -Path ((Get-Item $PSScriptRoot).Parent.Parent)
$sourePath = Resolve-Path -Path $projectPath/Source
$appPath = Resolve-Path -Path $sourePath/$appPath
$commandToRun = Read-Host -Promt "Enter composer command to run"
docker exec -it -w $volumeContainerPath $containerName bash -c "$($commandToRun)"