@ECHO OFF
:: 切换根目录
CD /D %~dp0

::变量
SET PHP_EXE=bin\php\php.exe
SET INSTALL_PHP=install\install.php
SET INSTALL_LOCK=install\install.lock

GOTO Start

:: 检测
:Start
    ECHO 检测安装

    :: 判断是否已经安装过
    IF EXIST %INSTALL_LOCK% GOTO Alert

    :: 判断php.exe是否存在
    IF NOT EXIST %PHP_EXE% GOTO Abort ELSE GOTO Install

:: 开始安装
:Install
    ECHO 开始安装
    :: 配置
    ECHO 配置系统

    %PHP_EXE% -n -d output_buffering=0 %INSTALL_PHP%
    :: 任务
    
    ECHO 增加计划任务
    SCHTASKS /CREATE /RU "SYSTEM" /SC ONSTART /TN "WNMP_START" /TR "\"%~dp0wnmp_start.bat\"" 2>nul 1>nul

    :: 完成
    GOTO Completed

:: 已安装
:Alert
    ECHO 已安装！
    GOTO Exit

:: 异常
:Abort
    ECHO 安装失败, 原因: 无法找到PHP-Cli!
    ECHO 安装终止
    GOTO Exit

:: 安装完成
:Completed
    ECHO 安装完成！

    ECHO 正在启动
    CMD /C wnmp_start.bat
    ECHO 启动成功！
    GOTO Exit

:: 退出脚本
:Exit
    :: PAUSE
    :: EXIT