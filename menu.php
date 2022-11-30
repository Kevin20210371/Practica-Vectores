<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta title="Menú">
    <style>
        nav {
            width:180px;
            background-color:#04C656;
            font-family:Arial;font-size:0.8em;
            color:#ccc;
        }
        nav ul {list-style:none;padding-left:0px;}
        nav li {padding:2px 0px;border-bottom:1px solid #02FD6C;}
        nav ul li {padding-left:10px;}
 
        nav a {text-decoration:none;color:#fff;}
        nav a:hover li {background-color:#02FD6C;}
 
        .submenu {padding-left:20px;}
    </style>
</head>
 
<body>
<h1>Menú funcional</h1>
<?php
# Acá mostramos los arrays con valores para el menú y submenús
$menu=array(
    array(
        'titulo' => 'Menú de ejercicios',
        'enlace' => '',
        'subcategoria' => array(
            /**array(
                'enlace' => 'index1a',
                'titulo' => 'Ejercicio 1',
                'enlace' => 'index1a.php',
            ),*/
           /** array(
               */
            
             array(
                'enlace' => 'indexMm',
                'titulo' => 'Mayor a Menor',
                'enlace' => 'indexMm.php',
            ),

              array(
                'enlace' => 'indexdc',
                'titulo' => 'Dato cercano',
                'enlace' => 'indexdc.php',
            ),

            array(
                'enlace' => 'indexvr',
                'titulo' => 'Valores aleatorios',
                'enlace' => 'indexvr.php',
            ),

            array(
                'enlace' => 'indexS',
                'titulo' => 'Suma',
                'enlace' => 'indexS.php',
            ),

            array(
                'enlace' => 'indexR',
                'titulo' => 'Resta',
                'enlace' => 'indexR.php',
            ),

            array(
                'enlace' => 'indexExit',
                'titulo' => 'Salir',
                'enlace' => 'indexExit.php',
            ),


        ),
    ),
);
 
function mostrarEnlace($menu,$class)
{
    if($menu['enlace'])
    {
        echo "<a href='".$menu['enlace']."'>";
    }
 
    echo "<li class='".$class."'>";
        echo $menu['titulo'];
    echo "</li>";
 
    if($menu['enlace'])
    {
        echo "</a>";
    }
}
 
echo "<nav>";
    echo "<ul>";
    for($i = 0; $i < count($menu); $i++)
    {
        mostrarEnlace($menu[$i],"menu");

        if(count($menu[$i]["subcategoria"])>0)
        {
            for ($j=0;$j<count($menu[$i]["subcategoria"]);$j++)
            {
                mostrarEnlace($menu[$i]["subcategoria"][$j], "submenu");
            }
        }
    }
    echo "<ul>";
echo "</nav>";
?>
</body>
</html>
