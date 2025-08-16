# Calidad de Software  QRBook (CodeIgniter)

## Objetivo
Asegurar **seguridad**, **rendimiento** (p95  8001200 ms) y **mantenibilidad** antes de cada release.

## Cómo correr
1) Crear BD e importar qrbook.sql (si aplica).
2) Configurar .env / pplication/config/*.php.
3) XAMPP: http://localhost/qrbook  |  CI4: php spark serve.

## Calidad (ISO/IEC 25010)
- Seguridad: auditoría dependencias y ZAP.
- Rendimiento: k6/JMeter (búsqueda, préstamos, inventario).
- Mantenibilidad: PHPStan + PHPCS (si se usa Composer).

## Versionado
Ramas cortas (eat/, ix/, perf/) + tags SemVer (1.0.0).
