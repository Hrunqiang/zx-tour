@ECHO OFF

:: ÇÐ»»Ä¿Â¼
CD /d %~dp0

:: Í£Ö¹MYSQL
CMD /C mysqld_stop.bat

:: Í£Ö¹MEMCACHE
CMD /C memcached_stop.bat

:: Í£Ö¹NGINX
CMD /C nginx_stop.bat

:: Í£Ö¹10PHP-CGI½ø³Ì
CMD /C phpcgi_stop.bat