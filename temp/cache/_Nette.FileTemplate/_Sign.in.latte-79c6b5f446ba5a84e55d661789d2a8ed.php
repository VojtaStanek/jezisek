<?php //netteCache[01]000370a:2:{s:4:"time";s:21:"0.26670900 1388474730";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:50:"/var/www/jezisek/nette/app/templates/Sign/in.latte";i:2;i:1388347107;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /var/www/jezisek/nette/app/templates/Sign/in.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ssbw3cppk0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd579522236_content')) { function _lbd579522236_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<div id="sign-in-block">
<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ; Nette\Latte\Macros\CoreMacros::includeTemplate('../components/form.latte', array('form' => 'signInForm') + $template->getParameters(), $_l->templates['ssbw3cppk0'])->render() ?>
	</div><?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb369e739674_title')) { function _lb369e739674_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<h1>Přihlášení</h1>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 