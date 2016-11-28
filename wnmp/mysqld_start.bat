@ECHO OFF

:: 切换目录
CD /d %~dp0

:: 启动MYSQL
:: bin\common\RunHiddenConsole.exe bin\mysql\bin\mysqld.exe --defaults-file=conf\my.ini
:: ECHO 启动MYSQL成功

SET APPNAME=mysqld.exe
SET STATUS=1
SET CONSOLE=bin\common\RunHiddenConsole.exe
SET APPPATH=bin\mysql\bin\
SET PARAMS=--defaults-file=conf\my.ini

:: 调试
:: ECHO %CONSOLE%
:: ECHO %APPPATH%
:: ECHO %PARAMS%

:: 检测是否已经启动
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

:: 没有启动则启动
IF %STATUS% EQU 0 (
    :: 启动
    %CONSOLE% %APPPATH%%APPNAME% %PARAMS%
    ECHO %APPNAME%启动成功
) ELSE (
    :: 状态
    ECHO %APPNAME%正在运行
)