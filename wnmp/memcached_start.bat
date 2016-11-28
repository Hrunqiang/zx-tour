@ECHO OFF

:: 切换目录
CD /d %~dp0

:: 启动MEMCACHE
:: bin\common\runhiddenconsole.exe bin\memcached\memcached.exe -m 512 -c 512
:: ECHO 启动MEMCACHE成功

SET APPNAME=memcached.exe
SET STATUS=1
SET CONSOLE=bin\common\RunHiddenConsole.exe
SET APPPATH=bin\memcached\
SET PARAMS=-m 512 -c 512

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