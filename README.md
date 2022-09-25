# Proyecto_Fermentum
El proyecto consiste en un Sistema de Alarma y Monitoreo de la Temperatura para unos diez Tanques de la Cervecería Fermentum ubicada en la Provincia de Córdoba, Argentina.

Se instaló el paquete xampp-linux-x64-8.1.6-0-installer en la computadora que funcionará como servidor. El sistema Operativo que se usó es el Ubuntu 22.04.1 LTS. Para el lado del cliente, usamos el microcontrolador ESP8266 con módulo WiFi, para poder conectarnos al servidor por medio del protocolo TCP y asi enviar la información de la temperatura provenientes de los sensores digitales (ds18b20).

Del Server se debe copiar la carpeta "php_post" en la carpeta "htdocs" del xampp ya instalado en la máquina. Tambien se debe cargar el archivo .ino de la carpeta client al ESP8266, modificando la red WiFi, la ip del servidor y el puerto que se utilizará.

## Server

Los archivos php de la carpeta "php_post" son los encargados de recibir, almacenar y analizar cada muestra entregada por la placa, a continuación se procede a explicar lo que realiza cada programa:

"conecta.php": se conecta a la base de datos en cuestión, en este caso, se llama "cerveceria".

"entrada_datos.php": recibe los datos enviados del esp8266 y los almacena en una base de datos. Evalúa cada muestra y dependiendo del rango de temperatura seteado por el usuario activa o no la señal de alerta (mensaes de mail y telegram). Una vez activado la alerta se debe habilitar nuevamente por medio del programa rango.php.

"rango.php": es el programa encargado de setear los rangos máximos y mínimos de cada Tanque de manera individual. Asu vez, se pude desactivar o activar el sistema de alerta de cada Tanque.

"rangoBD.php": actualiza el estado de la alerma y los valores de los rangos máximos mínimos ingresados en la base de datos por medio del programa rango.php.

Las carpetas de "Alarmas" contienen los archivos para poder mandar el aviso por email y por telegram. Se debe modificar la dirección de correo que enviará el mensaje y los que recibirán los mensajes. En cuanto a telegram, se creo un bot, el cual tiene su token al igual que el grupo de telegram que se creo con la finalidad de que los integrantes de dicho grupo reciban los mensajes de alerta. En la carpeta de "imagenes" se puede ver el estilo de mensaje de alerta que recibirá.

## Client

"ESP8266.ino": envía los valores de la temperatura de cada tanque. El tiempo entre muestras se puede modificar en este archivo. Se utiliza el protocolo TCP para la comunicación server/client. El puerto por defecto del xampp es el 80, como estaba ocupado este puerto, se cambió al 81. Este proceso se realiza configurando en el panel principal de configuraciones del xampp. Los sensores que se emplearon son digitales, la ventaja de este típo de sensores es que por un único pin se pueden conectar varios sensores. Esto es posible, solo si, se conoce la dirección de cada sensor. Por lo que en la carpeta "client" hay un programa donde se puede facilmente sacar esta información. Otra ventaja, es que se puede verificar facilmente si un sensor está dañado o bien desconectado. Si el sensor mide -127 es porque esta roto o bien se desconecto el pin o bien la dirección indicada no es la correcta.

## Monitoreo

Para visualizar tanto el rango de la temperatura, la curva temperatura/tiempo y el estado de la alarma, se instaló el Grafana, el cual es un software libre que nos permite vincular las diferentes columnas de las bases de datos con gráficos. En este caso, nuestra base de datos se llama "cervecería" y está en la carpeta de "Base de datos". Al igual que el archivo .json del grafana que esta en la carpeta "Grafana".

Tanto el server como el client están conectados a una misma red LAN. Lo cual nos permite, mediante el celular, poder entrar al server y poder setear los valores del rango tanto desde la pc como de un teléfono celular. Lo mismo sucede como el monitoreo, esto se demuestra en las imágenes de la carpeta "Imagenes".

## Arquitectura funcional

![Diagramas de flujo](https://user-images.githubusercontent.com/114314558/192158902-fede1783-ab17-4218-978e-0a08b2c375c9.png)


Nota: Para entender mejor el código, debe leer los comentarios.
