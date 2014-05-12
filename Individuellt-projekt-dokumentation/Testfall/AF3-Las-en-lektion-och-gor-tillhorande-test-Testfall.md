# AF3 - L�r en lektion och g�r tillh�rande test Testfall
Senast uppdaterad 13/5 2014 klo 01:30 av Svante Arvedson

## F�rkrav
* Anv�ndaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med anv�ndarnamnet *GulligaHannes* och l�senordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Lektion som �ppnas</th>
        <th>Indata</th>
        <th>F�rv�ntat resultat</th>
    </tr>
    <tr>
        <td>AF3-TF1</td>
        <td>Anv�ndaren �ppnar en lektion</td>
        <td>Ren�ssansen</td>
        <td>Anv�ndaren klickar p� l�nken <i>Ren�ssansen</i></td>
        <td>Lektionens inneh�ll visas upp, p� lektionssidan finns en l�nk till testet</td>
    </tr>
    <tr>
        <td>AF3-TF2</td>
        <td>Anv�ndaren skriver in en felaktig URL</td>
        <td>Kinesisk musik</td>
        <td>Anv�ndaren skriver in adressen "root/lektion/2568/kinesisk-musik"</td>
        <td>En 404-sida visas</td>
    </tr>
    <tr>
        <td>AF3-TF3</td>
        <td>En ickeinloggad anv�ndare f�rs�ker n� en lektion. I detta test ska anv�ndaren inte vara inloggad.</td>
        <td>Ren�ssansen</td>
        <td>Anv�ndaren skriver in adressen "root/lektion/1/renassansen"</td>
        <td>Anv�ndaren skickas vidare till Login-sidan</td>
    </tr>
    <tr>
        <td>AF3-TF4</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>AF3-TF5</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
