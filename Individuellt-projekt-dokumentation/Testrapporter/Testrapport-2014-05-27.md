# Testrapport 2014-05-27
Test av systemet enligt version *release iteration 6*. Testmilj�n �r en Apache server och webbl�sare *Firefox*, *Chrome*, *IE 9* 
och *Opera*, testerna g�rs p� en b�rbar dator. Testerna testar applikationens tillg�nglighet med enbart tangentbordet.    
Testerna g�rs den 27 maj 2014.

<table>
    <tr>
        <th>Testfall</th>
        <th>Webbl�sare</th>
        <th>Pass/Fail</th>
        <th>Kommentar</th>
    </tr>
    <tr>
        <td><a href="/../Testfall/DF3-Logga-in-Testfall.md">DF1-TF6</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td></td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF7</a></td>
        <td>Opera</td>
        <td>Fail</td>
        <td>Man kan inte komma �t registreringsformul�ret utan mus. I Opera Det g�r inte att tabba sig till den.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF7</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>I Firefox kunde man tabba sig fram till l�nken till registreringsformul�ret.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF6</a></td>
        <td>IE9</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen �r inte �tkomliga fr�n tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF7</a></td>
        <td>Chrome</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen �r inte �tkomliga fr�n tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF8</a></td>
        <td>Firefox</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen �r inte �tkomliga fr�n tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF4-Visa-statistik-over-gjorda-tester-Testfall.md">AF4-TF5</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td>Det syns n�stan inte alls vilken l�nk man fokuserar p� i navigationsbalken. Detta m�ste fixas till f�r att testet ska lyckas bra.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF7</a></td>
        <td>Chrome</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen �r inte �tkomliga fr�n tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF7</a></td>
        <td>Firefox</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen �r inte �tkomliga fr�n tangentbordet.</td>
    </tr>
</table>

## F�rb�ttningar
De h�r testerna avsl�jade m�nga brister i applikationen. Man kan inte anv�nda den utan att anv�nda 
mus eller en peksk�rm. Detta m�ste �tg�rdas om applikationen ska bli verkligt anv�ndbar.

## K�nsla av systemet
M�nga av de h�r testerna misslyckades helt, en mycket d�lig k�nsla av systemet.

## Tester som saknas
F�r att forts�tta att testa tillg�nglighet skulle jag beh�va skriva tester som kollar f�rgblindhet, 
och kanske ocks� tester som kollar hur l�tt det �r att f�rst� hur applikationen ska anv�ndas.