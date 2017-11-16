<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Animal Breeding Center Okapi Ośrodek Hodowli Zwierząt Śrem</title>
	<meta http-equiv="Content-Language" content="Polish" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="Edyta Płuciennik(www.artebox.pl)" />
	<meta name="description" content="Animal Breeding Center Okapi, Ośrodek Hodowli Zwierząt, Śrem, Pysząca." />
	<meta name="keywords" content="Animal Breeding Center Okapi, Ośrodek Hodowli Zwierząt, Śrem, Pysząca." />	
	<meta name="Robots" content="index,follow" />
	<meta name="Revisit-After" content="5 days" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/lightwindow.css" />
	<script src="engine/js/visuallightbox.js" type="text/javascript"></script>


<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="abcenter_banner_bar_wrapper">
	<div id="abcenter_banner_bar">
			<!--url's used in the movie-->
			<!--text used in the movie-->
			<!-- saved from url=(0013)about:internet -->
			<object data="flash/flashbanner_head_4.swf" type="application/x-shockwave-flash" width="1024" height="211" border="0" >
			<param name="movie" value="images/flashbanner_head_4.swf" />
			<a href="http://get.adobe.com/flashplayer/">
			<img src="img/validate.gif" alt="Pobierz Flash Player" width="1024" height="211" longdesc="http://get.adobe.com/flashplayer/" /></a>
			</object>
    </div>

</div>

<div id="abcenter_menu_wrapper">
  <div id="abcenter_menu4">
      <ul>
            <li><a href="home.html">ANIMAL BREEDING CENTER</a></li>
            <li><a href="aktualnosci.html">CIEKAWOSTKI I AKTUALNOŚCI</a></li>
            <li><a href="wspolpracujemy.html">WSPÓŁPRACUJEMY I WSPIERAMY</a></li>
            <li class="last"><a href="kontakt.php" class="current">KONTAKT</a></li>
      </ul>
  </div>
</div> 

<div id="abcenter_content_wrapper4">
	<div id="abcenter_content">
    	<div class="section_w382 fl">
			<h1>&nbsp;</h1>
			<h1 style="padding-left:10px; ">
				<?php
				// sprawdzamy, czy zmienna $submit jest pusta
				if (empty($_POST['submit'])) {
					// wyswietlamy formularz
					echo "<table border=\"0\"><form method=\"post\">
					
				<tr><td>Imie i Nazwisko</td></tr>
				<tr><td><input type=\"text\" name=\"imie\" style=\"width: 350px;  background-color:#999933;\"></td></tr>
				
				<tr><td>nr telefonu</td></tr>
				<tr><td><input type=\"text\" name=\"telefon\" style=\"width: 350px;  background-color:#999933;\"></td></tr>
				
				<tr><td>Adres e-mail</td></tr>
				<tr><td><input type=\"text\" name=\"email\" style=\"width: 350px;  background-color:#999933;\"></td></tr>
				
				<tr><td>Tresc wiadomosci</td></tr>
				<tr><td><textarea name=\"tresc\" style=\"width: 350px; height: 100px;  background-color:#999933;\"></textarea></td></tr>
				
				<tr>
					<td></td>
				</tr>
				<tr>
					<td align=\"right\"><input type=\"reset\" value=\"Wyczyść Pola\"><span> </span><input type=\"submit\" name=\"submit\" value=\"Wyslij Wiadomość\"></td></form>
				</tr>
				<tr>
				</tr>
				</table>";
				}
				
				// sprawdzamy, czy zmienne przeslane z formularza nie sa puste
				elseif (!empty($_POST['imie']) && !empty($_POST['email']) && !empty($_POST['telefon']) && !empty($_POST['tresc'])) {
					// jezeli powyzszy warunek jest spelniony tworzona jest wiadomosc
					// zmienna $message zawiera tresc wiadomosci
					$message = "Od:\n$_POST[imie]\ne-mail: $_POST[email]\ntelefon: $_POST[telefon]\nTresc Wiadomosci: $_POST[tresc]";
					// zmienna $header zawiera przede wszystkim adres zwrotny
					$header = "From: $_POST[imie] <$_POST[email]>";
					// funkcja mail() za pomoca której wiadomosc zostanie wyslana
					@mail("przezro300@gmail.com","Formularz ze strony WWW","$message","$header")
					or die('Nie udalo sie wyslac wiadomosci');
					// wyswietlenie komunikatu w przypadku powodzenia 
					echo "<div align=\"center\"><strong><br /><br /><br /><br /><br /><br /><br />Dziekujemy, wiadomosc zostala wyslana.<br /><br /><input type=\"button\" VALUE=\"Powrót\" onClick=\"parent.location='kontakt.php'\"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></strong></div>";
				}
				// lub w przypadku nie wypelnienia formularza do konca
				else echo "<span style=\"color: #FF6600; text-align:center;\"><br /><br /><br /><br /><br />BŁĄD!<br />Prosimy o poprawnie wypelnienie <br />wszystkich pól formularza!<br /><br /><input type=\"button\" VALUE=\"Powrót\" onClick=\"history.go(-1)\"><br /><br /><br /><br /><br /><br /><br /><br /><br /></span>";
				
				?>			
			</h1>	
		</div>
		<div class="section_w366 fnr2">	
			<h1><iframe width="355" height="338" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
			src="http://maps.google.pl/maps/ms?msid=215998802925784596992.0004bbdd243a706cdd0c3&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=52.059246,16.968384&amp;spn=1.050357,1.917114&amp;z=8&amp;output=embed"></iframe>
			<br />
			<a href="http://maps.google.pl/maps/ms?msid=215998802925784596992.0004bbdd243a706cdd0c3&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=52.059246,16.968384&amp;spn=1.050357,1.917114&amp;z=8&amp;source=embed" style="color:#FF6600; padding-left:110px;" title="Pokaż większą mapę w osobnym oknie" target="_blank">POKAŻ WIĘKSZĄ MAPĘ</a>
	  </div>
        <div class="section_w760teleadres fr">
			<h1><img style="float:left; padding:34px 14px 0 16px;" src="images/contact_pic.jpg" title="kontakt" alt="kontakt" />
				<p style="clear: right; padding:38px 0 20px 16px; text-align:justify;">Szanowni Państwo, serdecznie zachęcamy do kontaktowania się z nami <br />za pomocą zamieszczonego powyżej formularza kontaktowego.<br /><br /> 
				<span style="font-weight:bold; color:#FF6600;">OŚRODEK HODOWLI ZWIERZĄT ANIMAL BREEDING CENTER ”OKAPI”</span><br /><br />
				<span style="color:#FF6600;">telefon:</span> +48.601 636 505<br />
				<span style="color:#FF6600;"> e-mail:</span> abcenter.okapi (małpka) gmail.com<br />
				<span style="color:#FF6600;"> www.abcenter-okapi.com</span>
		  </h1>
	  </div>
      	<div class="cleaner">
		</div>
        <div id="abcenter_footer">
			<div class="list_01">
				<ul>
					<li><a href="home.html" title="Animal Breeding Center Okapi" target="_self"><img src="images/foot_pic_abcenter.png"></a></li>
					<li><img style="float:left; padding:0;" src="images/kwadracik.gif"><a href="home.html" title="przejdź do: Strona Główna" target="_self">STRONA GŁÓWNA</a></li>
					<li><img style="float:left; padding:0;" src="images/kwadracik.gif"><a href="news.html" title="przejdź do: Ciekawostki i Aktualności" target="_self">CIEKAWOSTKI I AKTUALNOŚCI</a></li>
				</ul>
			</div>
			<div class="list_01">
				<ul>
					<li><a href="home.html" title="Animal Breeding Center: Nasi Podopieczni" target="_self"><img src="images/foot_pic_npodopieczni.png"></a></li>
					<li><img style="float:left; padding:0;" src="images/kwadracik.gif"><a href="home.html" title="zobacz: nasze Kolekcje Ptaków" target="_self">KOLEKCJE PTAKÓW</a></li>
					<li><img style="float:left; padding:0;" src="images/kwadracik.gif"><a href="news.html" title="zobacz: nasze Kolekcje Ssaków" target="_self">KOLEKCJE SSAKÓW</a></li>
					<li><img style="float:left; padding:0;" src="images/kwadracik.gif"><a href="news.html" title="udostępniamy: Nadwyżki Hodowlane" target="_self">NADWYŻKI HODOWLANE</a></li>
				</ul>
			</div>
			<div class="list_01">
				<ul>
					<li><a href="home.html" title="Animal Breeding Center: Pozostałe Informacje" target="_self"><img src="images/foot_pic_pozostale.png"></a></li>
					<li><img style="float:left; padding:0;" src="images/kwadracik.gif"><a href="home.html" title="Linkownia: współpracujemy i Wspieramy" target="_self">WSPÓLPRACUJEMY I WSPIERAMY</a></li>
					<li><img style="float:left; padding:0;" src="images/kwadracik.gif"><a href="news.html" title="skontaktuj się z Animal Breeding Center Okapi" target="_self">KONTAKT</a></li>
				</ul>
			</div>
				<p style="clear: right; padding:150px 0 0 16px;">Copyright 2012 © <a href="index.html"  title="ANIMAL BREEDING CENTER 'OKAPI'" target="_self">ANIMAL BREEDING CENTER 'OKAPI'</a><img style="padding:0;" src="images/kwadracik02.gif">all rights reserved<img style="padding:0;" src="images/kwadracik02.gif">Design by <a href="http://www.artebox.pl" title="przejdź do: www.ARTeBox.pl - strony www / grafika / reklama / poligrafia" target="_blank">Edyta Płuciennik ARTeBox.pl</a> </p> 
      </div> <!-- end of footer -->
  </div>
</div>
</body>
</html>