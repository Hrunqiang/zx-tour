@ECHO OFF

:: 切换目录
CD /d %~dp0

TASKKILL /F /IM "wnmp_control.exe" 2>NUL 1>NUL
:: TASKKILL /F /IM "mysqld.exe" 2>NUL 1>NUL

ECHO 停止所有应用
CMD /C wnmp_stop.bat

ECHO 移除计划任务 ...
FOR %%i IN (WNMP_START) DO SCHTASKS /DELETE /TN "%%i" /F 2>NUL 1>NUL

ECHO.
ECHO 卸载成功