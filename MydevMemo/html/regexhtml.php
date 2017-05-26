<?php
	function RegEx($texte)
	{
		//balises					
		$texte = preg_replace('#(.*)(&lt;)([^!?].*)(&gt;)(;*)#isU', '$1$2<span style="color:#F92672">$3</span>$4$5$6', $texte);
		//mot clé hmtl
		$texte = preg_replace('#(.*)(content|media|rel|charset|href|title|target|src|class|alt|method|action|for|type|name|placeholder|id|size|maxlength|value|label|cols|rows|selected|checked)(=)(&quot;.*&quot;)#isU', '$1<span style="color:#45ce55">$2</span><span style="color:white">$3</span><span style="color:#E6DB74">$4</span>', $texte);
		//attribut
		$texte = preg_replace('#(.*)(autofocus|required|&amp;amp;)(.*)#isU', '$1<span style="color:#45ce55">$2</span>$3', $texte);
		//instructions
		$texte= preg_replace('#(.*)(echo|isset|include|array_key_exists|array_search|in_array|array[^_]|foreach|function|str_replace|date|htmlspecialchars|session_start|setcookie|time|fgets|fputs|fseek|fopen|PDO|prepare|execute|exec|preg_match)(.*)#sU', '$1<span style="color:aqua">$2</span>$3', $texte);
		//array $_GET..
		$texte= preg_replace('#(.*)(\&dollar;_.*)(\[)(.*)(\])(.*)#isU', '$1<span style="color:#A6E22E">$2</span>$3<span style="color:#E6DB74">$4</span>$5', $texte);
		/*/array $_GET..
		$texte= preg_replace('#(.*)(\&dollar;_POST)(\[)(.*)(\])(.*)#isU', '$1<span style="color:#A6E22E">$2</span>$3<span style="color:#E6DB74">$4</span>$5', $texte);*/
		//variable PHP
		$texte= preg_replace('#(\&dollar;[^_])(.*)([\s=;])(.*)#isU', '<span style="color:#A6E22E">$1$2</span>$3$4$5', $texte);
		//conditions et boucles
		$texte= preg_replace('#(.*)(for[^each]\s|while|switch|case|break|else|if\(|elseif|default|new|try|catch|die|->|=>|::|SELECT|FROM|WHERE|DESC|LIMIT|AND|INSERT INTO|VALUES|UPDATE|DELETE)(.*)#sU', '$1<span style="color:#F92672">$2</span>$3', $texte);
		//commentaires html
		$texte = preg_replace('#(.*)(&lt;!--.*--&gt;)(.*)#isU', '$1<span style="color:grey">$2</span>$4', $texte);
		//commentaires php multi ligne
		$texte= preg_replace('#(.*)(/\*.*\*/)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
		//commentaires php
		$texte= preg_replace('#(.*)(//.*\n)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
		echo $texte;
	}
?>