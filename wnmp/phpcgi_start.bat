@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

SET APPNAME=php-cgi.exe
SET STATUS=1
SET CONSOLE=bin\common\RunHiddenConsole.exe
SET APPPATH=bin\php\
SET PARAMS=-b 127.0.0.1:9000 -c conf\php.ini

:: ����
:: ECHO %CONSOLE%
:: ECHO %APPPATH%
:: ECHO %PARAMS%

:: ����Ƿ��Ѿ�����
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

:: û������������
IF %STATUS% EQU 0 (
    :: ����
    FOR /L %%i IN (1,1,10) DO %CONSOLE% %APPPATH%%APPNAME% %PARAMS%
    ECHO %APPNAME%�����ɹ�
) ELSE (
    :: ״̬
    ECHO %APPNAME%��������
)