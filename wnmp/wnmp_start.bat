@ECHO OFF
:: �л���Ŀ¼
CD /D %~dp0

:: ����MYSQL
CMD /C mysqld_start.bat

:: ����MEMCACHE
CMD /C memcached_start.bat

:: ����NGINX
CMD /C nginx_start.bat

:: ����10PHP-CGI����
CMD /C phpcgi_start.bat