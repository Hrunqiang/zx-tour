@ECHO OFF

:: 切换目录
CD /d %~dp0

SET APPNAME=php-cgi.exe
SET STATUS=1
SET CONSOLE=bin\common\RunHiddenConsole.exe
SET APPPATH=bin\php\
SET PARAMS=-b 127.0.0.1:9000 -c conf\php.ini

:: 调试
:: ECHO %CONSOLE%
:: ECHO %APPPATH%
:: ECHO %PARAMS%

:: 检测是否已经启动
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

:: 没有启动则启动
IF %STATUS% EQU 0 (
    :: 启动
    FOR /L %%i IN (1,1,10) DO %CONSOLE% %APPPATH%%APPNAME% %PARAMS%
    ECHO %APPNAME%启动成功
) ELSE (
    :: 状态
    ECHO %APPNAME%正在运行
)