@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

:: ֹͣ����
:: TASKKILL /F /IM mysqld.exe 2>NUL 1>NUL
:: bin\mysql\bin\mysqladmin.exe -uroot -psucopcs shutdown

SET APPNAME=mysqld.exe
SET STATUS=1
SET MYSQLADMIN=bin\mysql\bin\mysqladmin.exe
SET MYSQLUSER=root
SET MYSQLPWD=

:: ����Ƿ��Ѿ�����
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

IF %STATUS% EQU 0 (
    :: û������
    ECHO %APPNAME%û������
) ELSE (
    :: ֹͣӦ��
    :: TASKKILL /F /IM %APPNAME% 2>NUL 1>NUL
    :: %MYSQLADMIN% -u%MYSQLUSER% -p%MYSQLPWD% shutdown
    %MYSQLADMIN% -u%MYSQLUSER% shutdown
    ECHO %APPNAME%ֹͣ�ɹ�
)