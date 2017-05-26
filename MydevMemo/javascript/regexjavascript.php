<?php
	function RegEx($texte)
	{
		//log()					
		$texte = preg_replace('#(.*)(log)(\(.*)#isU', '$1<span style="color:fuchsia">$2</span>$3', $texte);
		//var = x
		$texte = preg_replace('#(.*)(var)(\s[a-zA-Z0-9]*)([;\s=].*)#isU', '$1<span style="color:aqua">$2</span><span style="color:fuchsia">$3</span>$4', $texte);
		//if (
		$texte = preg_replace('#(.*)(if[\s]*)(\(.*)#isU', '$1<span style="color:aqua">$2</span>$3', $texte);
		//instructions
		$texte = preg_replace('#(.*)(else|alert|switch|case|break|default|length|min|toLocaleLowerCase|toLocaleUpperCase|charAt|return|random|this)(.*)#isU', '$1<span style="color:aqua">$2</span>$3', $texte);
		//function
		$texte = preg_replace('#(.*)(function[\s]*)(.*)(\()(.*)(\))#isU', '$1<span style="color:aqua">$2</span><span style="color:fuchsia">$3</span>$4<span style="color:fuchsia">$5</span>$6', $texte);
		//numbers
		$texte = preg_replace('#(.*)([0-9])(.*)#isU', '$1<span style="color:#45ce55">$2</span>$3', $texte);
		//entre guillemets
		$texte = preg_replace('#(.*)("[\s]*[a-zA-Z0-9éèêà\-ç\s!?\'.,;%î\#]*[\s]*")(.*)#isU', '$1<span style="color:#ff8000">$2</span>$3', $texte);
		//commentaires
		$texte = preg_replace('#(.*)(//.*\n)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
		//commentaires multi ligne
		$texte = preg_replace('#(.*)(/\*.*\*/)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
		echo $texte;
	}
?>