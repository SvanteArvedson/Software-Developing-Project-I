# Testrapport 2014-05-27
Test av systemet enligt version *release iteration 6*. Testmiljön är en Apache server och webbläsare *Firefox*, *Chrome*, *IE 9* 
och *Opera*, testerna görs på en bärbar dator. Testerna testar applikationens tillgänglighet med enbart tangentbordet.    
Testerna görs den 27 maj 2014.

<table>
    <tr>
        <th>Testfall</th>
        <th>Webbläsare</th>
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
        <td>Man kan inte komma åt registreringsformuläret utan mus. I Opera Det går inte att tabba sig till den.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF1-Registrera-ny-anvandare-Testfall.md">AF1-TF7</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>I Firefox kunde man tabba sig fram till länken till registreringsformuläret.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF2-Avregistrera-anvandare-Testfall.md">AF2-TF6</a></td>
        <td>IE9</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen är inte åtkomliga från tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF7</a></td>
        <td>Chrome</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen är inte åtkomliga från tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF8</a></td>
        <td>Firefox</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen är inte åtkomliga från tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF4-Visa-statistik-over-gjorda-tester-Testfall.md">AF4-TF5</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td>Det syns nästan inte alls vilken länk man fokuserar på i navigationsbalken. Detta måste fixas till för att testet ska lyckas bra.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF7-Redigera-anvandarprofil-Testfall.md">AF7-TF7</a></td>
        <td>Chrome</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen är inte åtkomliga från tangentbordet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF17-Andra-losenord-Testfall.md">AF17-TF7</a></td>
        <td>Firefox</td>
        <td>Fail</td>
        <td>Dropdown-knapparna i navigationen är inte åtkomliga från tangentbordet.</td>
    </tr>
</table>

## Förbättningar
De här testerna avslöjade många brister i applikationen. Man kan inte använda den utan att använda 
mus eller en pekskärm. Detta måste åtgärdas om applikationen ska bli verkligt användbar.

## Känsla av systemet
Många av de här testerna misslyckades helt, en mycket dålig känsla av systemet.

## Tester som saknas
För att fortsätta att testa tillgänglighet skulle jag behöva skriva tester som kollar färgblindhet, 
och kanske också tester som kollar hur lätt det är att förstå hur applikationen ska användas.