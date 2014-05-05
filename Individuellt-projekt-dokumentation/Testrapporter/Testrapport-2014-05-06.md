# Testrapport 2014-05-06
Test av systemet enligt version *release iteration 3*. Testmilj�n �r en server 
av typen *Windows server 2008 R2* och webbl�sare *Firefox*, *Chrome*, *IE 9* 
och *Opera*, testerna g�rs p� en b�rbar dator.    
Testerna g�rs den 6 maj 2014.

<table>
    <tr>
        <th>Testfall</th>
        <th>Webbl�sare</th>
        <th>Pass/Fail</th>
        <th>Kommentar</th>
        <th>Krav</th>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF1</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Man m�ste l�sa noggrant f�r att se vilket f�lt som �r vad, exempelvis f�r att skilja p� <i>Namn</i> och <i>Anv�ndarnamn</i>. Det b�rde g�ras b�ttre med hj�lp av design.</td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF2</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Man kan inte skriva in f�r m�nga tecken i f�lten, detta hj�lper anv�ndaren att g�ra r�tt.</td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF3</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td>Renderingen av listan �r inte j�ttesnygg i IE9, ska eventuellt kollas �ver.</td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF4</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td>I l�senordsf�lten blir punkterna v�ldigt sm� j�mf�rt med texten i de andra f�lten. Om tid finns kan jag koll p� det, kanske �r det l�tt att fixa.</td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF5</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td></td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF6</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF1</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td>Ser bra ut f�rutom att punkterna i l�senordsf�ltet �r v�ldigt sm�. Informationsrutan ska fomuleras om, texten d�r k�nns lite kantig.</td>
        <td>AF2, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF2</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Man kan inte mata in mer �n 8 tecken i l�senordsf�ltet.</td>
        <td>AF2, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF3</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>�ven i Opera blir l�senordspunkterna v�ldigt sm�.</td>
        <td>AF2, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF4</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
        <td>AF2, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF5</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td></td>
        <td>AF2, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF1</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Det h�r testfallet lyckades, men �ndringarna slog inte genom i de andra �ppna sessionerna (jag �r inloggad i flera webbl�sare som <i>GulligaHannes</i>). Det beh�vs fler testfall som t�cker den problematiken.</td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF2</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Man kan inte skriva fler �n 25 tecken i f�ltet f�r anv�ndarnamn.</td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF3</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF4</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td></td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF5</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td></td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF6</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td></td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF7</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td>Jag ska fundera en g�ng till p� vad som borde h�nda i det h�r fallet, det k�ndes inte optimalt som det var nu.</td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF1</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF2</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td>Ska nog vara ett felmeddelande ist�llet f�r tv�, f�r fundera p� det.</td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF3</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Det g�r inte att skriva fler �n 8 tecken i l�senordsf�lten.</td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF4</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Samma tanke som vid AF17-TF2, kanske borde vara ett felmeddelande ist�llet.</td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF5</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td>Borde de inskrivna l�senorden renderas tillbaka ist�llet f�r att f�rsvinna?</td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF6</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td></td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/DF1-Logga-in-Testfall.md">DF1-TF1</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td></td>
        <td>DF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/DF1-Logga-in-Testfall.md">DF1-TF2</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td></td>
        <td>DF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/DF1-Logga-in-Testfall.md">DF1-TF3</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
        <td>DF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/DF1-Logga-in-Testfall.md">DF1-TF4</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Man kan inte skriva mer �n 25 respektive 8 tecken i inputf�lten.</td>
        <td>DF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/DF1-Logga-in-Testfall.md">DF1-TF5</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td></td>
        <td>DF1, BF1, BF2, BF3</td>
    </tr>
</table>

## F�rb�ttningar
Av de h�r testerna s� kam jag fram till att gr�nssnittet borde f�r�ndras en del. 
Felmeddelandena �r ibland konstiga och en del informationsrutor �r klumpigt 
formulerade. Funktionsm�ssigt s� borde valideringen i f�rsta hand g�ras p� klienten 
med javascript, just nu s� g�rs all validering p� servern vilken �r on�digt. Jag 
borde genomf�ra de h�r testfallen p� andra typer av enheter ocks� f�r att testa 
gr�nssnittet, exempelvis p� peksk�rm och p� mobil.

## K�nsla av systemet
Det k�nns provisoriskt just nu, antagligen p� grund av att systemet inte �r 
f�rdigdesignat.

## Tester som saknas
N�r ja gjorde testerna kom jag p� att det saknas tester f�r hantering av 
f�rlorad uppkoppling mot databasen och tester f�r att kolla applikationens 
beteende om flera sessioner �r ig�ng samtidigt som samma anv�ndare. Jag f�r 
skriva testfall f�r detta. Exempelvis om tv� �r inloggade som samma person 
och en av dem raderar kontot, vad h�nder d� om den andra sessionen f�rs�ker 
�ndra till exempel l�senord.