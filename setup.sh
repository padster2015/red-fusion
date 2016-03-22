composer install
chmod -R gu+w storage && chmod -R guo+w storage && chmod 777 -R * && chown apache:apache -R *
cp -a httpd.conf /etc/httpd/conf/httpd.conf
mkdir /root/.config
mkdir /root/.config/git
mkdir /root/.config/git/attributes
mkdir /root/.config/git/ignore
chmod 777 -R /root/.config
