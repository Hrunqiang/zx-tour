@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

:: ����NGINX
:: bin\common\RunHiddenConsole.exe bin\nginx\nginx.exe -c conf\nginx.conf
:: ECHO ����NGINX�ɹ�

SET APPNAME=nginx.exe
SET STATUS=1
SET CONSOLE=bin\common\RunHiddenConsole.exe
SET APPPATH=bin\nginx\
SET PARAMS=-c conf\nginx.conf

:: ����
:: ECHO %CONSOLE%
:: ECHO %APPPATH%
:: ECHO %PARAMS%

:: ����Ƿ��Ѿ�����
(TASKLIST|FIND /I "%APPNAME%"||SET STATUS=0) 2>nul 1>nul

:: û������������
IF %STATUS% EQU 0 (
    :: ����
    %CONSOLE% %APPPATH%%APPNAME% %PARAMS%
    ECHO %APPNAME%�����ɹ�
) ELSE (
    :: ״̬
    ECHO %APPNAME%��������
)