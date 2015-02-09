<?php
/**
Sitio web para Sociedad para la Integración Civil, Asociación Civil
Autor: Emmanuelle Laguna Marín
Autor URL: http://about.me/shannonbit
Versión: 1.2015.02.07
Licencia: Licencia Creative Commons Atribución-CompartirIgual 4.0 Internacional.
*/

$request_url = explode( '/', $_SERVER['REQUEST_URI'] ); 
// Se definen las variables de entorno.
if( !defined( 'MAIN_DIR' ) ){ define( 'MAIN_DIR', 'http://' . $_SERVER['HTTP_HOST'] . '/' . $request_url[1] ); }
if( !defined( 'MAIN_PATH' ) ){ define( 'MAIN_PATH', dirname( __FILE__ ) ); }
if( !defined( 'VENDOR_DIR' ) ){ define( 'VENDOR_DIR', MAIN_DIR . '/vendor' ); }
if( !defined( 'IMAGE_DIR' ) ){ define( 'IMAGE_DIR', MAIN_DIR . '/img' ); }

$uri = ( isset( $_GET['uri'] ) ) ? $_GET['uri'] : 'content';
	
switch ( $uri ) {
	case 'content':
		include_once( MAIN_PATH . '\views\home\header.php' );
		include_once( MAIN_PATH . '\views\home\content.php' );
		include_once( MAIN_PATH . '\views\general\footer.php' );
		break;
	case 'conceptos':
		include_once( MAIN_PATH . '\views\conceptos\header.php' );
		include_once( MAIN_PATH . '\views\conceptos\content.php' );
		include_once( MAIN_PATH . '\views\general\footer.php' );
		break;
	case 'proyectos':
		include_once( MAIN_PATH . '\views\proyectos\header.php' );
		include_once( MAIN_PATH . '\views\proyectos\content.php' );
		include_once( MAIN_PATH . '\views\general\footer.php' );
		break;
	default:
		include_once( MAIN_PATH . '\views\general\header.php' );
		//include_once( MAIN_PATH . '\views\general\content.php' );
		include_once( MAIN_PATH . '\views\general\footer.php' );
		break;
}