@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

:: ֹͣ����
:: TASKKILL /F /IM php-cgi.exe 2>NUL 1>NUL

SET APPNAME=php-cgi.exe
SET STATUS=1

:: ����Ƿ��Ѿ�����
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

IF %STATUS% EQU 0 (
    :: û������
    ECHO %APPNAME%û������
) ELSE (
    :: ֹͣӦ��
    TASKKILL /F /IM %APPNAME% 2>NUL 1>NUL
    ECHO %APPNAME%ֹͣ�ɹ�
)