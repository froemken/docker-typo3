#!/bin/bash

# Set user-rights of RAM Disk to www-data
chown -R www-data:www-data /var/www/html/typo3/var/

FILE=/var/www/html/typo3/public/typo3conf/LocalConfiguration.php
if [ ! -f "$FILE" ]; then
    #su - www-data -s /bin/bash -c '/var/www/html/typo3/vendor/bin/typo3cms install:setup -n'
    /var/www/html/typo3/vendor/bin/typo3cms install:setup -n
    chown -R www-data:www-data /var/www/html/typo3
fi
