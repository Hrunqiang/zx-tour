@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

:: ����MYSQL
:: bin\common\RunHiddenConsole.exe bin\mysql\bin\mysqld.exe --defaults-file=conf\my.ini
:: ECHO ����MYSQL�ɹ�

SET APPNAME=mysqld.exe
SET STATUS=1
SET CONSOLE=bin\common\RunHiddenConsole.exe
SET APPPATH=bin\mysql\bin\
SET PARAMS=--defaults-file=conf\my.ini

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