$appName = 'checkmenu'
$containerName = 'apache-php-check-menu'
$volumeContainerPath = "/var/www/html"
$projectPath = Resolve-Path -Path ((Get-Item $PSScriptRoot).Parent.Parent)
$sourePath = Resolve-Path -Path $projectPath/Source
$appPath = Resolve-Path -Path $sourePath/$appPath
$commandToRun = Read-Host -Promt "Enter npm command to run"
$currentLocation = Get-Location
Set-Location $projectPath
docker run --rm -it --name=$($appName)-node -v $PWD\Source\checkmenu:$volumeContainerPath -w $volumeContainerPath node:latest bash -c "$($commandToRun)"
Set-Location $currentLocation