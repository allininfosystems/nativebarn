php bin/magento setup:static-content:deploy
php bin/magento cache:flush
php bin/magento setup:static-content:deploy
cd /home/nativebarn/pub
cd ..
ls
mysqldump  -u nativebarn -p nativebarn > nativebarn29Dec.sql
php bin/magento setup:static-content:deploy
ls

php bin/magento setup:static-content:deploy
ls
php bin/magento
php bin/magento module:disable Pmclain_Stripe
php bin/magento setup:upgrade
php bin/magento module:disable Inchoo_Stripe
php bin/magento module:enable Inchoo_Stripe
php bin/magento setup:static-content:deploy
php bin/magento module:disable Inchoo_Stripe
php bin/magento setup:upgrade
rm -rf var/*
rm -rf pub/static/*
php bin/magento cache:clean
php bin/magento setup:static-content:deploy
chmod -R 7777 var pub/static
chmod -R 777 var pub/static
rm -rf var/*
rm -rf pub/static/*
php bin/magento cache:clean
php bin/magento setup:static-content:deploy
chmod -R 7777 var pub/static
chmod -R 777 var pub/static
ll
php bin/magento
php bin/magento deploy:mode:set production
php bin/magento deploy:mode:show
w
su -
w
top
su -
