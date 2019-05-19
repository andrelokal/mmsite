<?php

/* Nome do Proprietario */
define("SIS_TITULO", "Magazine Manager");
/* Descricao Meta Description */
define("SIS_DESCRICAO", utf8_encode(SIS_TITULO." | Description to Google. "));
/* URL do Proprietario - Configurar de acordo com a URL amigavel utilizada */
define("SIS_URL", "https://local.magazinemanager.com.br:443/");
/* Email de Interacao */
define("SIS_EMAIL", "atendimento@url.com.br");
/* Servidor de Conexao ao banco */
define("SIS_HOST", "localhost");
/* Porta de Conexao ao banco */
define("SIS_PORTA", "3306");
/* Usuario de Conexao ao banco */
define("SIS_USUARIO", "");
/* Senha de Conexao ao banco */
define("SIS_SENHA", ""); 
/* Banco de dados do cliente */   
define("SIS_BANCO", "");
/* Tempo de uso de Sessao (em segundos) */
define("SIS_TEMPO", 7200);
/* Registros por Pagina */		
define("SIS_PAGINACAO", 20); 
/* Dias gratis do Plano Gratuito */
define("SIS_URL_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
//define("SIS_URL_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
/* Parcelas sem Juros no Cartao (PAGSEGURO) */
define('SIS_PARCELAS_SEM_JUROS', 5);