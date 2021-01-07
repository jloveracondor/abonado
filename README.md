# El Varcito
Proyecto de estadisticas deportivas creado por Condor Agency. Documentación hecha para facilitar la implementación y creación de modulos nuevos dentro del proyecto


---
## Construido con 🛠️

### php, html5, css3, jquery

Se utiliza html5 y css3 para generar la estructura del sitio web y php para generar modulos y enlaces del sitio y así poder reutilizar codigo dentro del desarrollo y poder hacerlo modular.

El Sistema se está creando en C# .net

## Framework Utilizados
* [Boostrapt 4](https://getbootstrap.com/) -  Para la estructura
* Css Grid
* Less [koala](http://koala-app.com/) - Para el compilado de css

## Librerias implementadas
* [Font Awesome](https://fontawesome.com/) - Iconografia
* Bootstrap - [Date Picker](https://bootstrap-datepicker.readthedocs.io/en/latest/) - Calendario
* [Slick](https://kenwheeler.github.io/slick/) - Sliders
* Popper

## Estructura para crear paginas nuevas


```
abonado
├ assets/
│  ├ bootstrap/
│  └ img/
├ pg-boxcore/
│  ├ boxcore.php // pagina con el nombre contiene codigo y si hay tablas, se crean archivos con las tablas solas.
│  ├ tabla-boxcore.php
│  └ tabla-jugada-jugada.php
├ js/
└ boxcore.php // La pagina exterior, contiene la estructura de elementos

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
## Archivos Unicos

Estos son los archivos necesarios para que cualquier pagina funcione. 

* header.php
* ads.php
* footer.php
* tabla-resultados-superior.php


## Estructura de las paginas - html / css 

Todas las clases generadas para el proyecto deben llevar el prefijo "ab-" de esta forma, se identifican ante las clases utilizadas por librerias. 


#### Creación de paginas
``` html
<div class="container-fluid container-ab my-5" id="id-unico"> <!--Siempre utiliza<r estas 3 clases, ya que contienen el tamaño y la estructura de la pagina -->
	<div class="row">
		<div class="col">
			<h1 class="ab-title"> Estadísticas de Bateo</h1> <!-- Clase unica para los titulos --> 
		</div>
	</div>
</div>
```

#### Estructura de Archivos Css 

cada sección de la pagina se encuentra documentada con su nombre de sección. Si se crea Css nuevo, favor documentar con el nombre de la sección

```
abonado
├ css/
│  ├ julio.less // La mayoria de las clases se encuentran aqui
│  ├ main.less // Donde compilan todos los archivos de css
│  └ Variables.less // se encuentran solo los colores y clases globales
```
