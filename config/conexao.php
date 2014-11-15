<?php
//1 - Conexão normal
$conexao = mysql_connect('localhost', 'root', '');

//2. Selecionando o banco de dados
mysql_select_db('buriphp');

// trata o encoding
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');