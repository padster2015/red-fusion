composer install
chmod -R gu+w storage && chmod -R guo+w storage && chmod 777 -R *
cp -a httpd.conf /etc/httpd/conf/httpd.conf
mkdir /root/.config
mkdir /root/.config/.git
chmod 777 -R /root/.config
