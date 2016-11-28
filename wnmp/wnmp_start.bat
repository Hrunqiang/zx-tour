@ECHO OFF
:: 切换根目录
CD /D %~dp0

:: 启动MYSQL
CMD /C mysqld_start.bat

:: 启动MEMCACHE
CMD /C memcached_start.bat

:: 启动NGINX
CMD /C nginx_start.bat

:: 启动10PHP-CGI进程
CMD /C phpcgi_start.bat