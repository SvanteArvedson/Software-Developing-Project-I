# Testrapport 2014-05-06
Test av systemet enligt version *release iteration 3*. Testmiljön är en server 
av typen *Windows server 2008 R2* och webbläsare *Firefox*, *Chrome*, *IE 9* 
och *Opera*, testerna görs på en bärbar dator.    
Testerna görs den 6 maj 2014.

<table>
    <tr>
        <th>Testfall</th>
        <th>Webbläsare</th>
        <th>Pass/Fail</th>
        <th>Kommentar</th>
        <th>Krav</th>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF1</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Man måste läsa noggrant för att se vilket fält som är vad, exempelvis för att skilja på <i>Namn</i> och <i>Användarnamn</i>. Det börde göras bättre med hjälp av design.</td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF2</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Man kan inte skriva in för många tecken i fälten, detta hjälper användaren att göra rätt.</td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF3</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td>Renderingen av listan är inte jättesnygg i IE9, ska eventuellt kollas över.</td>
        <td>AF1, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF4</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td>I lösenordsfälten blir punkterna väldigt små jämfört med texten i de andra fälten. Om tid finns kan jag koll på det, kanske är det lätt att fixa.</td>
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
        <td>Ser bra ut förutom att punkterna i lösenordsfältet är väldigt små. Informationsrutan ska fomuleras om, texten där känns lite kantig.</td>
        <td>AF2, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF2</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Man kan inte mata in mer än 8 tecken i lösenordsfältet.</td>
        <td>AF2, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF3</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Även i Opera blir lösenordspunkterna väldigt små.</td>
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
        <td>Det här testfallet lyckades, men ändringarna slog inte genom i de andra öppna sessionerna (jag är inloggad i flera webbläsare som <i>GulligaHannes</i>). Det behövs fler testfall som täcker den problematiken.</td>
        <td>AF7, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF2</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Man kan inte skriva fler än 25 tecken i fältet för användarnamn.</td>
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
        <td>Jag ska fundera en gång till på vad som borde hända i det här fallet, det kändes inte optimalt som det var nu.</td>
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
        <td>Ska nog vara ett felmeddelande istället för två, får fundera på det.</td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF3</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Det går inte att skriva fler än 8 tecken i lösenordsfälten.</td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF4</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Samma tanke som vid AF17-TF2, kanske borde vara ett felmeddelande istället.</td>
        <td>AF17, BF1, BF2, BF3</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF5</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td>Borde de inskrivna lösenorden renderas tillbaka istället för att försvinna?</td>
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
        <td>Man kan inte skriva mer än 25 respektive 8 tecken i inputfälten.</td>
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

## Förbättningar
Av de här testerna så kam jag fram till att gränssnittet borde förändras en del. 
Felmeddelandena är ibland konstiga och en del informationsrutor är klumpigt 
formulerade. Funktionsmässigt så borde valideringen i första hand göras på klienten 
med javascript, just nu sä görs all validering på servern vilken är onödigt. Jag 
borde genomföra de här testfallen på andra typer av enheter också för att testa 
gränssnittet, exempelvis på pekskärm och på mobil.

## Känsla av systemet
Det känns provisoriskt just nu, antagligen på grund av att systemet inte är 
färdigdesignat.

## Tester som saknas
När ja gjorde testerna kom jag på att det saknas tester för hantering av 
förlorad uppkoppling mot databasen och tester för att kolla applikationens 
beteende om flera sessioner är igång samtidigt som samma användare. Jag får 
skriva testfall för detta. Exempelvis om två är inloggade som samma person 
och en av dem raderar kontot, vad händer då om den andra sessionen försöker 
ändra till exempel lösenord.