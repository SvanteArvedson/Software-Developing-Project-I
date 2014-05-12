# AF3 - Lär en lektion och gör tillhörande test Testfall
Senast uppdaterad 13/5 2014 klo 01:30 av Svante Arvedson

## Förkrav
* Användaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med användarnamnet *GulligaHannes* och lösenordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Lektion som öppnas</th>
        <th>Indata</th>
        <th>Förväntat resultat</th>
    </tr>
    <tr>
        <td>AF3-TF1</td>
        <td>Användaren öppnar en lektion</td>
        <td>Renässansen</td>
        <td>Användaren klickar på länken <i>Renässansen</i></td>
        <td>Lektionens innehåll visas upp, på lektionssidan finns en länk till testet</td>
    </tr>
    <tr>
        <td>AF3-TF2</td>
        <td>Användaren skriver in en felaktig URL</td>
        <td>Kinesisk musik</td>
        <td>Användaren skriver in adressen "root/lektion/2568/kinesisk-musik"</td>
        <td>En 404-sida visas</td>
    </tr>
    <tr>
        <td>AF3-TF3</td>
        <td>En ickeinloggad användare försöker nå en lektion. I detta test ska användaren inte vara inloggad.</td>
        <td>Renässansen</td>
        <td>Användaren skriver in adressen "root/lektion/1/renassansen"</td>
        <td>Användaren skickas vidare till Login-sidan</td>
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
