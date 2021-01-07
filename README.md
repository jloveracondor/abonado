# El Varcito
Proyecto de estadisticas deportivas creado por Condor Agency. Documentación hecha para facilitar la implementación y creación de modulos nuevos dentro del proyecto


---
## Lenguajes Utilizados
### php, html5, css3, jquery

Se utiliza html5 y css3 para generar la estructura del sitio web y php para generar modulos y enlaces del sitio y así poder reutilizar codigo dentro del desarrollo y poder hacerlo modular.

El Sistema se está creando en C# .net

## Framework Utilizados
* Boostrapt 4
* Css Grid
* Less - *Se compila con Koala*

## Librerias implementadas
* Font Awesome
* Bootstrap - Date Picker (Calendario)
* Slick - Sliders
* Popper

## Estructura para crear paginas nuevas


```
abonado
├ assets/
│  ├ bootstrap/
│  └ img/
├ pg-boxcore/
│  ├ boxcore.php
│  ├ tabla-boxvore.php
│  └ tabla-jugada-jugada.php
├ js/
└ boxcore.php

```

### Como armar archivos internos

Debemos crear un archivo en la raiz del proyecto con el nombre de la pantalla final. En este caso boxcore.php - Ese archivo es el contenedor de todos los demás archivos, llamandolos con un include.

Ejemplo: 

``` php
<?php include("header.php"); ?>
<?php include("tabla-resultados-superior.php");?>
<?php include("ads.php");?>
<?php include("pg-boxcore/boxcore.php");?>
<?php include ("footer.php"); ?>
```
