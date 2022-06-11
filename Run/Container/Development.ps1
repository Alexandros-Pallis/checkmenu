
$websiteConfigurationFile = 'CheckMenuPHP.ps1'
$websiteConfigurationFullPath = Join-Path -Path $env:FREELANCE_LOCAL_CONFIGURATION_PATH -ChildPath $websiteConfigurationFile
$projectPath = Resolve-Path -Path ((Get-Item $PSScriptRoot).Parent.Parent)
$developmentPath = Resolve-Path -Path $projectPath/Development
$productionPath = Resolve-Path -Path $projectPath/Production
$workPath = Resolve-Path -Path $projectPath/Work

. $websiteConfigurationFullPath

$currentPath = Get-Location

Set-Location $developmentPath
if (Test-Path docker-compose.override.yml) {
    Copy-Item -Path docker-compose.override.yml -Destination $workPath
}

Set-Location -Path $productionPath
if (Test-Path docker-compose.yml) {
    Copy-Item -Path docker-compose.yml -Destination $workPath
}

Set-Location -Path $workPath

New-Item .env
Get-ChildItem env: | ForEach-Object -Process {
    if (-Not ($_.Name.Contains(".") -or $_.Name.Contains("(") -or $_.Name.Contains(")"))) {
        Add-Content -Path .env -Value "$($_.Name)=$($_.Value)"
    }
}

docker-compose down
docker-compose up -d --build

if (Test-Path docker-compose.override.yml) {
    Remove-Item docker-compose.override.yml
}

if (Test-Path docker-compose.yml) {
    Remove-Item docker-compose.yml
}

if (Test-Path .env) {
    Remove-Item .env
}

Set-Location $currentPath