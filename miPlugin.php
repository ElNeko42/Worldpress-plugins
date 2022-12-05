<?php
/*
Plugin Name: miFiltro
Plugin URI: 
Description: Este pluging agrega texto antes del titulo
Version: 1.0.0
Author: Francisco Jose Ben Ramirez
Author URI: 
License: GPLv2
*/
add_filter("the_title", "mi_filtroAgreagaTitulo");
add_filter("the_content", "mi_filtroEditaContenido");

//agregamos un texto al titulo
if (!function_exists("mi_filtroAgreagaTitulo")){
    function mi_filtroAgreagaTitulo($textoDelTitulo){
        return "Texto extra ".$textoDelTitulo;
    }
}

// cambiamos de minusculas a mayusculas el contenido

if (!function_exists("mi_filtroEditaContenido")){
    function mi_filtroEditaContenido($textoDelContenido){
        return strtoupper($textoDelContenido);
    }
}