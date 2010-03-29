<?php //netteCache[01]000229a:2:{s:4:"time";s:21:"0.82351600 1269865045";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:74:"C:\WEB\stranky\nette\document_root/../app/templates/Homepage/default.phtml";i:2;i:1268600870;}}}?><?php
// file …/templates/Homepage/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '20fd4fc1fb'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb43139a1a97_content')) { function _cbb43139a1a97_content($_cb) { extract(func_get_arg(1))
?>

<div id="header">
	<h1>It works!</h1>

	<h2>Congratulations on your first Nette Framework powered page.</h2>
</div>

<div>
	<p><?php echo TemplateHelpers::escapeHtml($message) ?></p>
</div>

<style>
	body {
		margin: 0;
		padding: 0;
	}

	div {
		padding: .2em 1em;
	}

	#header {
		background: #EEE;
		border-bottom: 1px #DDD solid;
	}

	h1 {
		color: #0056ad;
		font-size: 30px;
	}

	h2 {
		color: gray;
		font-size: 20px;
	}
</style><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, $template->getParams()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
