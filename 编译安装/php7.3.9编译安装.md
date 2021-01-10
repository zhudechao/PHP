##PHP7.3.9编译安装

前置

```
yum -y install libxml2 libxml2-devel openssl openssl-devel bzip2 bzip2-devel libcurl libcurl-devel libjpeg libjpeg-devel libpng libpng-devel freetype freetype-devel gmp gmp-devel libmcrypt libmcrypt-devel readline readline-devel libxslt libxslt-devel zlib zlib-devel glibc glibc-devel glib2 glib2-devel ncurses curl gdbm-devel db4-devel libXpm-devel libX11-devel gd-devel gmp-devel expat-devel xmlrpc-c xmlrpc-c-devel libicu-devel libmcrypt-devel libmemcached-devel libzip gcc-c++

```

与编译

```
./configure \
 --prefix=/usr/local/php7.3.9\
 --enable-fpm\
 --with-fpm-user=www\
 --with-fpm-group=www\
 --with-config-file-path=/usr/local/php7.3.9/conf\
 --disable-rpath\
 --enable-soap\
 --with-libxml-dir\
 --with-xmlrpc\
 --with-openssl\
 --with-mhash\
 --with-pcre-regex\
 --with-zlib\
 --enable-bcmath\
 --with-bz2\
 --enable-calendar\
 --with-curl\
 --enable-exif\
 --with-pcre-dir\
 --enable-ftp\
 --with-gd\
 --with-openssl-dir\
 --with-jpeg-dir\
 --with-png-dir\
 --with-zlib-dir\
 --with-freetype-dir\
 --enable-gd-jis-conv\
 --with-gettext\
 --with-gmp\
 --with-mhash\
 --enable-mbstring\
 --with-onig\
 --with-mysqli=mysqlnd\
 --with-pdo-mysql=mysqlnd\
 --with-zlib-dir\
 --with-readline\
 --enable-shmop\
 --enable-sockets\
 --enable-sysvmsg\
 --enable-sysvsem \
 --enable-sysvshm \
 --enable-wddx\
 --with-libxml-dir\
 --with-xsl\
 --enable-zip\
 --with-pear
```

编译报错

```
configure: error: Please reinstall the BZip2 distribution
解决
yum -y install bzip2 \
bzip2-devel.x86_64
```

```
configure: error: Unable to locate gmp.h
yum -y install gmp \
gmp-devel
```
```
yum -y install libzip-devel
```











