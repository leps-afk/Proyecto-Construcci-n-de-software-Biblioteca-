# Sistema de Biblioteca

Sistema web desarrollado para la gestión de una biblioteca, cuyo objetivo es facilitar la administración de libros, usuarios, préstamos y reportes mediante una aplicación organizada bajo la arquitectura MVC (Modelo - Vista - Controlador). El sistema permite realizar operaciones CRUD para la gestión de la información, controlar préstamos y devoluciones de libros, además de mostrar reportes generales del estado de la biblioteca.

## Tecnologías utilizadas

El proyecto fue desarrollado utilizando PHP como lenguaje principal del lado del servidor, MySQL/MariaDB para la gestión de la base de datos, HTML5 y CSS3 para la interfaz gráfica, además del patrón de arquitectura MVC para mantener organizado el código. Como herramientas de desarrollo se utilizaron XAMPP, Visual Studio Code y GitHub para el control de versiones.

## Requisitos para ejecutar el proyecto

Para ejecutar correctamente el sistema se requiere tener instalado XAMPP con los servicios Apache y MySQL activos, PHP 8 o superior, un navegador web y un editor de código como Visual Studio Code.

## Instalación y configuración

Primero se debe descargar o clonar el proyecto y ubicar la carpeta dentro del directorio htdocs de XAMPP:

C:\xampp\htdocs

Posteriormente se deben iniciar los servicios Apache y MySQL desde el panel de control de XAMPP.

Luego se debe crear una base de datos llamada:

biblioteca

e importar el archivo SQL ubicado dentro de la carpeta database del proyecto.

Después se debe configurar el archivo:

config/Conexion.php

con los datos correspondientes de conexión a la base de datos, como usuario, contraseña, nombre de la base de datos y puerto.

Para ejecutar el sistema se debe abrir el navegador e ingresar a:

http://localhost/Biblioteca/public/

## Usuario de prueba

Usuario:
admin

Contraseña:
admin123

## Estructura del proyecto

El proyecto está organizado utilizando la arquitectura MVC. La carpeta app contiene los controladores, modelos y vistas del sistema. Los controladores se encargan de recibir las solicitudes del usuario y gestionar la comunicación entre las vistas y los modelos. Los modelos contienen la lógica relacionada con la base de datos y las consultas necesarias para manipular la información. Las vistas contienen la interfaz gráfica que permite la interacción con el usuario.

La carpeta config contiene la clase encargada de realizar la conexión con la base de datos. La carpeta database contiene el script SQL utilizado para crear las tablas necesarias. La carpeta public contiene el archivo index.php, que funciona como punto de entrada del sistema, además de los archivos CSS utilizados para el diseño de la aplicación.

## Módulos implementados

El sistema cuenta con un módulo de autenticación que permite controlar el acceso mediante usuario y contraseña. También incluye el módulo de gestión de libros, donde se pueden registrar, consultar, modificar y eliminar libros. El módulo de usuarios permite administrar la información de los usuarios registrados en el sistema. El módulo de préstamos permite registrar préstamos, consultar información y gestionar devoluciones. Finalmente, el módulo de reportes permite visualizar estadísticas generales como cantidad de libros, usuarios y préstamos existentes.

## Arquitectura del sistema

La aplicación utiliza el patrón MVC, permitiendo separar la lógica del sistema, la conexión con la base de datos y la interfaz visual. Esta organización facilita el mantenimiento, actualización y ampliación del proyecto.

## Control de versiones

El proyecto utiliza GitHub como repositorio para almacenar el código fuente y llevar un control de los cambios realizados durante el desarrollo. Cada modificación importante fue registrada mediante commits para facilitar el trabajo colaborativo del equipo.

## Equipo de desarrollo

Proyecto realizado como parte de la asignatura Construcción de Software. El equipo participó en la implementación de módulos, desarrollo del código, pruebas del sistema, documentación y mejoras de la interfaz gráfica.
