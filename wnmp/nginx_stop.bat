@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

:: ֹͣ����
:: TASKKILL /F /IM nginx.exe 2>NUL 1>NUL

SET APPNAME=nginx.exe
SET APPPATH=bin\nginx\
SET PARAMS=-s stop
SET STATUS=1

:: ����Ƿ��Ѿ�����
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

IF %STATUS% EQU 0 (
    :: û������
    ECHO %APPNAME%û������
) ELSE (
    :: ֹͣӦ��
    TASKKILL /F /IM %APPNAME% 2>NUL 1>NUL
    :: %APPPATH%%APPNAME% %PARAMS%
    ECHO %APPNAME%ֹͣ�ɹ�
)