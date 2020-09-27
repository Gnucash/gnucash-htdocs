<!DOCTYPE HTML>
<html>
<head>
<!-- LINK-REV-MADE -->
<link rev="made" href="mailto:webmaster@gnucash.org">
<!-- LINK-REV-MADE -->
<title>Busca los listos de GnuCash</title>
<style type="text/css"><!--
  strong.keyword { color: Red; }
  p.example      { text-indent: 1em; 
                   color: Navy;
		   font-weight: bold;
                   font-family: monospace; }
  code           { color: Navy;
                   font-family: monospace; }
  code.example   { color: Navy;
		   font-weight: bold;
                   font-family: monospace; }
  code.operator  { color: Navy;
                   font-family: monospace; 
		   font-weight: bold; }
--></style>
</head>
<body lang="es">
<h1>Busca los listos de GnuCash</h1>
<form method="get" action="{cgi}">
<p>
<strong>Cadena de Búsqueda:</strong> 
<input type="text" name="query" size="40">
<input type="submit" name="submit" value="Buscar!">
<!-- <input type="hidden" name="idxname" value="foobar"> -->
<a href="{cgi}">[Cómo buscar]</a>
</p>
<p>
<strong>Visualizar:</strong>
<select name="max">
<option value="10">10</option>
<option selected value="20">20</option>
<option value="30">30</option>
<option value="50">50</option>
<option value="100">100</option>
</select>
<strong>Descripción:</strong>
<select name="result">
<option selected value="normal">normal</option>
<option value="short">corta</option>
</select>
<strong>Orden:</strong>
<select name="sort">
<option selected value="score">por puntuación</option>
<option value="date:late">por fecha ascendente</option>
<option value="date:early">por fecha descendente</option>
<option value="field:subject:ascending">por título ascendente</option>
<option value="field:subject:descending">por título descendente</option>
<option value="field:from:ascending">por autor ascendente</option>
<option value="field:from:descending">por autor descendente</option>
<option value="field:size:ascending">por tamaño ascendente</option>
<option value="field:size:descending">por tamaño descendente</option>
<option value="field:uri:ascending">por URI ascendente</option>
<option value="field:uri:descending">por URI descendente</option>
</select>
</p>

<p>
<strong>Lists to Search:</strong>
<ul>
<input type="checkbox" name="idxname" value="gnucash-es" checked>gnucash-es
<input type="checkbox" name="idxname" value="gnucash-announce">gnucash-announce
<input type="checkbox" name="idxname" value="gnucash-devel">gnucash-devel
<input type="checkbox" name="idxname" value="gnucash-user">gnucash-user
<input type="checkbox" name="idxname" value="gnucash-br">gnucash-br
<input type="checkbox" name="idxname" value="gnucash-de">gnucash-de
<input type="checkbox" name="idxname" value="gnucash-fr">gnucash-fr
<input type="checkbox" name="idxname" value="gnucash-it">gnucash-it
</ul>
</p>
</form>
<hr>
