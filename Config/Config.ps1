$appName = 'checkmenu'
$containerName = 'apache-php-check-menu'
$projectRoot = Resolve-Path -Path ((Get-Item $PSScriptRoot).Parent)
$sourePath = Resolve-Path -Path $projectRoot/Source
$appPath = Resolve-Path -Path $sourePath/$appPath