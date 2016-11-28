@ECHO OFF

:: 切换目录
CD /d %~dp0

:: 停止任务
:: TASKKILL /F /IM nginx.exe 2>NUL 1>NUL

SET APPNAME=nginx.exe
SET APPPATH=bin\nginx\
SET PARAMS=-s stop
SET STATUS=1

:: 检测是否已经启动
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

IF %STATUS% EQU 0 (
    :: 没有运行
    ECHO %APPNAME%没有运行
) ELSE (
    :: 停止应用
    TASKKILL /F /IM %APPNAME% 2>NUL 1>NUL
    :: %APPPATH%%APPNAME% %PARAMS%
    ECHO %APPNAME%停止成功
)