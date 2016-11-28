@ECHO OFF

:: 切换目录
CD /d %~dp0

:: 停止任务
:: TASKKILL /F /IM mysqld.exe 2>NUL 1>NUL
:: bin\mysql\bin\mysqladmin.exe -uroot -psucopcs shutdown

SET APPNAME=mysqld.exe
SET STATUS=1
SET MYSQLADMIN=bin\mysql\bin\mysqladmin.exe
SET MYSQLUSER=root
SET MYSQLPWD=

:: 检测是否已经启动
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

IF %STATUS% EQU 0 (
    :: 没有运行
    ECHO %APPNAME%没有运行
) ELSE (
    :: 停止应用
    :: TASKKILL /F /IM %APPNAME% 2>NUL 1>NUL
    :: %MYSQLADMIN% -u%MYSQLUSER% -p%MYSQLPWD% shutdown
    %MYSQLADMIN% -u%MYSQLUSER% shutdown
    ECHO %APPNAME%停止成功
)