@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

:: ����MEMCACHE
:: bin\common\runhiddenconsole.exe bin\memcached\memcached.exe -m 512 -c 512
:: ECHO ����MEMCACHE�ɹ�

SET APPNAME=memcached.exe
SET STATUS=1
SET CONSOLE=bin\common\RunHiddenConsole.exe
SET APPPATH=bin\memcached\
SET PARAMS=-m 512 -c 512

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