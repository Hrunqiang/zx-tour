@ECHO OFF
:: �л���Ŀ¼
CD /D %~dp0

::����
SET PHP_EXE=bin\php\php.exe
SET INSTALL_PHP=install\install.php
SET INSTALL_LOCK=install\install.lock

GOTO Start

:: ���
:Start
    ECHO ��ⰲװ

    :: �ж��Ƿ��Ѿ���װ��
    IF EXIST %INSTALL_LOCK% GOTO Alert

    :: �ж�php.exe�Ƿ����
    IF NOT EXIST %PHP_EXE% GOTO Abort ELSE GOTO Install

:: ��ʼ��װ
:Install
    ECHO ��ʼ��װ
    :: ����
    ECHO ����ϵͳ

    %PHP_EXE% -n -d output_buffering=0 %INSTALL_PHP%
    :: ����
    
    ECHO ���Ӽƻ�����
    SCHTASKS /CREATE /RU "SYSTEM" /SC ONSTART /TN "WNMP_START" /TR "\"%~dp0wnmp_start.bat\"" 2>nul 1>nul

    :: ���
    GOTO Completed

:: �Ѱ�װ
:Alert
    ECHO �Ѱ�װ��
    GOTO Exit

:: �쳣
:Abort
    ECHO ��װʧ��, ԭ��: �޷��ҵ�PHP-Cli!
    ECHO ��װ��ֹ
    GOTO Exit

:: ��װ���
:Completed
    ECHO ��װ��ɣ�

    ECHO ��������
    CMD /C wnmp_start.bat
    ECHO �����ɹ���
    GOTO Exit

:: �˳��ű�
:Exit
    :: PAUSE
    :: EXIT