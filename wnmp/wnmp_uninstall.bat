@ECHO OFF

:: �л�Ŀ¼
CD /d %~dp0

TASKKILL /F /IM "wnmp_control.exe" 2>NUL 1>NUL
:: TASKKILL /F /IM "mysqld.exe" 2>NUL 1>NUL

ECHO ֹͣ����Ӧ��
CMD /C wnmp_stop.bat

ECHO �Ƴ��ƻ����� ...
FOR %%i IN (WNMP_START) DO SCHTASKS /DELETE /TN "%%i" /F 2>NUL 1>NUL

ECHO.
ECHO ж�سɹ�