@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

:: ֹͣMYSQL
CMD /C mysqld_stop.bat

:: ֹͣMEMCACHE
CMD /C memcached_stop.bat

:: ֹͣNGINX
CMD /C nginx_stop.bat

:: ֹͣ10PHP-CGI����
CMD /C phpcgi_stop.bat