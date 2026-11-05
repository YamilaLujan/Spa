# ÉLÉA Wellness & Spa

**Estudiante:** Yamila Lujan
**Proyecto:** Sistema de Turnos para un Spa  
**Framework:** Laravel  
**Base de datos:** MySQL

## Descripción

ÉLÉA Wellness & Spa es un sistema web que permite consultar servicios de bienestar y reservar turnos.

El sistema cuenta con una sección pública, un listado de servicios, un formulario de reservas y una sección de gestión de turnos.

## Tecnologías utilizadas

- PHP
- Laravel
- MySQL
- HTML
- CSS
- Blade

## Instalación

1. Clonar o descargar el proyecto.
2. Ejecutar `composer install`.
3. Configurar el archivo `.env`.
4. Crear la base de datos `spa_db` en MySQL.
5. Ejecutar `php artisan key:generate`.
6. Ejecutar `php artisan migrate:fresh --seed`.
7. Ejecutar `php artisan serve`.
8. Abrir `http://127.0.0.1:8000`.

## Relación entre servicios y turnos

Se implementó una relación muchos a muchos (belongsToMany).

Un turno puede incluir varios servicios y un servicio puede formar parte de diferentes turnos.

La relación se implementa mediante la tabla intermedia `servicio_turno`, que contiene las claves foráneas `servicio_id` y `turno_id`.

En los modelos Servicio y Turno se definieron los métodos de relación correspondientes.

## Rutas principales

| Método | URL | Controlador |
|---|---|---|
| GET | / | PaginaController@inicio |
| GET | /servicios | PaginaController@servicios |
| GET | /contacto | PaginaController@contacto |
| GET | /turnos | TurnoController@index |
| GET | /turnos/create | TurnoController@create |
| POST | /turnos | TurnoController@store |
| DELETE | /turnos/{turno} | TurnoController@destroy |

## Datos de prueba

- 15 servicios.
- 20 turnos.
- Relaciones entre turnos y servicios generadas mediante seeders.

## Funcionalidades

- Visualización de servicios.
- Consulta de información del spa.
- Registro de turnos.
- Validación de datos.
- Selección de múltiples servicios.
- Listado de turnos.
- Cancelación de turnos.
