<?php
	$title = "Kataloger";
?>

		<h1>Kataloger</h1>
		<p>I vänsterliberalernas <strong>root</strong> finns tre kataloger, <tt>content/</tt>, <tt>source/</tt> och <tt>target/</tt>. Dessutom finns en fil, <tt>README.md</tt> som används av GitHub för att generera beskrivningen som finns på projektets startsida. 
		
		<ul>
			<li><tt>content/</tt> innehåller källfiler för alla de sidor som ska skapas på webbsidan. Källfilen är en mall, som används av kompilatorn när den skapar den kompletta webbsidan. 
			<li><tt>source/</tt> innehåller själva kompilatorn <tt>creator.php</tt>, webbsidans stilmall <tt>style.css</tt>, de bilder som ingår i stilmallen (mappen <tt>img/</tt>), och en fil som agerar mall för det HTML-dokument som kompilatorn skapar, <tt>skel.php</tt>. 
			<li><tt>target/</tt> fylls på med filer som skapas av kompilatorn. Innehållet i denna mapp är det som sedan laddas upp till webbhotellet. Det är den färdiga webbsidan. 
		</ul>
		
		<h2>Katalogstruktur</h2>
		<p>Alla sidor som finns på Vänsterliberalernas webbsida, är i själva verket index-filer som lagras i en mapp. När man länkar till en sida, så länkar man i själva verket till en katalog som innehåller en indexfil. Det kan tyckas omständligt, men det för med sig två praktiska saker: 
		
		<ol>
			<li>Webbsidornas URL:er blir lätta att komma ihåg. Till exempel återfinns denna sida på <tt><?php echo $URL ?>manual/kataloger/</tt>, istället för till exempel <tt><?php echo $URL ?>manual/kataloger.php</tt>, eller <tt><?php echo $URL ?>index.php?f=/manual/kataloger/&amp;q=0xcf56aff</tt>. 
			<li>Att skapa undersidor blir väldigt enkelt. Istället för att skapa <tt><?php echo $URL ?>manual.php</tt> och sedan <tt><?php echo $URL ?>manual/</tt> för att lagra undersidor till manualen blir snabbt väldigt besvärligt. 
		</ol>
		
		<p>Den uppenbara nackdelen är att det blir väldigt många <tt>index.php</tt> att hålla koll på i textredigeraren, men det är inte ett oövervinnerligt problem. 
		
		<h2>Att redigera HTML-koden på en sida</h2>
		<p>Om du vill leka runt med HTML-kod och CSS, så är det dags att läs noggrant nu. Om du vill ge dig in i att programmera webbsidan med hjälp av kompilatorn, ska du istället läsa om <a href="<?php echo $URL ?>manual/arbetsflöde/">Arbetsflödet för att skapa och kompilera Vänsterliberalernas hemsida</a>. För att kunna göra det behöver du dock en dator med PHP installerat, samt vissa kunskaper i PHP-programmering. 
		
		<p>För att redigera HTML-koden på en webbsida, öppnar du filen <tt>index.html</tt> i den katalog vars sida du vill redigera. Om du vill lägga till en sida, skapar du en ny katalog på en lämplig plats, och skapar sedan en <tt>index.html</tt> i katalogen. Om du vill att din nya sida ska synas i hemsidans navigeringsrad, blir det besvärligt. Du måste nämligen gå in i alla HTML-dokument separat och uppdatera navigeringslistan med den nya katalogen. Det är av den anledningen som det finns en kompilator till hemsidan. Mer om den i nästa del. 
		
		<p class="strong"><a href="<?php echo $URL ?>manual/arbetsflöde/">Nästa del: Arbetsflöde</a></p>