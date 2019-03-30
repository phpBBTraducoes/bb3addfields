<?php

/**
*
* @package BB3AddFields
* @copyright (c) 2015 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.2.1] (https://github.com/phpBBTraducoes)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ADDFIELDS_REQUIRED'=>'Preencha os campos adicionais',
	'ADDFIELDS_REQUIRED_FIELD'=>'campo',
	'ADDFIELDS_REQUIRED_EXISTS'=>'O campo <u>%s</u> pode conter apenas uma variante das sugeridas',
	'ADDFIELDS_REQUIRED_FIELDS'=>'Os campos <u>Sublinhado</u> são obrigatórios, para os vários campos em (parênteses) o número mínimo necessário de campos é indicado',
	'ADDFIELDS_REQUIRED_MIN'=>'minimo %s campo(s) %s',
	'ADDFIELDS_CHECK_FUNCTION' => 'erro de preenchimento de campo <u>%s</u>',
	'ADDFIELDS_MULTIHLP' => 'Para selecionar mais de um valor, mantenha pressionado <b>Ctrl</b>',
	'TRACKER_ADDFIELDS'	=> 'Campos adicionais',
	'TRACKER_ADDFIELDS_EXAMPLE'	=> 'Exemplo',

	'SELECT_FORUM' => 'Escolha um fórum',
	'CREATE_TOPIC_NOACCESS' => 'Nenhum direito ou desativado.',
));
