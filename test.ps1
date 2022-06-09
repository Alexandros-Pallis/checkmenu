$websiteConfigurationFile = 'CheckMenuPHP.ps1'
$websiteConfigurationFullPath = Join-Path -Path $env:FREELANCE_LOCAL_CONFIGURATION_PATH -ChildPath $websiteConfigurationFile

. $websiteConfigurationFullPath

New-Item .env
Get-ChildItem env: | ForEach-Object -Process {
    if (-Not ($_.Name.Contains(".") -or $_.Name.Contains("(") -or $_.Name.Contains(")"))) {
        Add-Content -Path .env -Value "$($_.Name)=$($_.Value)"
    }
}


docker-compose down
docker-compose up -d --build

if (Test-Path .env) {
    Remove-Item .env
}