<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.36933000 1389539896";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:56:"/var/www/jezisek3/app/templates/components/flashes.latte";i:2;i:1389539832;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /var/www/jezisek3/app/templates/components/flashes.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '78hd9gtdp0')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$iterations = 0; foreach ($flashes as $flash) { ?><div class="alert alert-<?php echo htmlSpecialChars($flash->type) ?>  alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?>

</div>
<?php $iterations++; } 