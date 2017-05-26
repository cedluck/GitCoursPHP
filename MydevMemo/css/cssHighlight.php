<?php
	function RegexCss($texte)
	{
		//balises					
		$texte = preg_replace('#(.*)(p[\s,]|h[1-6][\s,]|\*\s)(.*)#isU', '$1<span style="color:#F92672">$2</span>$3', $texte);
		//balise avec attribut
		$texte = preg_replace('#(.*)(a\[.*\])(.*)#isU', '$1<span style="color:#F92672">$2</span>$3', $texte);
		//#id .class"
		$texte = preg_replace('#(.*)(\#id|\.class|\#conteneur|\.element:nth-child\([1-3]\)|.element)(.*)#isU', '$1<span style="color:#a6e22e">$2</span>$3', $texte);
		//propriétés
		$texte = preg_replace('#([\{])(.*)([\}])(.*)#isU', '$1<em><span style="color:aqua">$2</span></em>$3', $texte);
		//ebtre guillemets
		$texte = preg_replace('#(\'.*\')#isU', '<span style="color:#E6DB74">$1</span><em><span style="color:">$2</span><span style="color:white">$3</span></em>', $texte);
		//commentaires
		$texte = preg_replace('#(.*)(/\*.*\*/)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
		//font-media
		$texte = preg_replace('#(.*)(@font-face|@media|and)(.*)#isU', '$1<span style="color:#F92672">$2</span>$3', $texte);
		//média
		$texte = preg_replace('#(.*)(screen|all|tv)(.*)#isU', '$1<span style="color:aqua">$2</span>$3', $texte);
		echo $texte;
	}
?>