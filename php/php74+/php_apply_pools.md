
1. Create users

```
sudo adduser --disabled-login site1
sudo adduser --disabled-login site2
```

2. Add user to nginx group:


```
usermod -a -G site1 www-data
usermod -a -G site2 www-data
```


3. Set dirs owner:

```
chown -R site1:site1 /var/www/site1
chown -R site2:site2 /var/www/site2

```

4. Create new php-fpm pools

```
$ sudo cp /etc/php/7.4/fpm/pool.d/www.conf /etc/php/7.4/fpm/pool.d/fpm-site1.conf
$ sudo cp /etc/php/7.4/fpm/pool.d/www.conf /etc/php/7.4/fpm/pool.d/fpm-site2.conf
```

Delete default pool

```
$ sudo rm /etc/php/7.4/fpm/pool.d/www.conf
```


