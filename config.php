<?php
date_default_timezone_set('America/Recife');
$dataDia 	= date("d");
$dataMes 	= date("m");
$dataAno 	= date("Y");
$dataHora 	= date("H");
$dataMinuto	= date("i");
$dataSegundo= date("s");
//*****************************************************************************
//****************  CONFIGURAÇÕES *********************************************
$NOME_ARQUIVO		= $dataDia."-".$dataMes."-".$dataAno."-".$dataHora."-".$dataMinuto."-".$dataSegundo;
$PASTA_SAIDA_SMS 	= "/var/spool/sms/outgoing/"; //caso altere o caminho da pasta, alterar também este caminho.
$PASTA_SMS_ENVIADA 	= "/var/spool/sms/sent/"; //caso altere o caminho da pasta, alterar também este caminho.
$PASTA_SMS_ERRO 	= "/var/spool/sms/failed/"; //caso altere o caminho da pasta, alterar também este caminho.
$DESTINO_ARQUIVO 	= $PASTA_SAIDA_SMS.$NOME_ARQUIVO;
//*****************************************************************************