<?php
$link = mysqli_connect(
    getenv('TYPO3_INSTALL_DB_HOST'),
    getenv('TYPO3_INSTALL_DB_USER'),
    getenv('TYPO3_INSTALL_DB_PASSWORD'),
    getenv('TYPO3_INSTALL_DB_DBNAME'));

if (!$link) {
    echo 'Error: could not connect to MySQL service.' . PHP_EOL;
    echo 'Debug Err. Number: ' . mysqli_connect_errno() . PHP_EOL;
    echo 'Debug Err. Message: ' . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo 'Perfect: We are successfully connected to MySQL service!' . PHP_EOL;
echo 'Host-Information: ' . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
