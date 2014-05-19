# AF3 - Lär en lektion och gör tillhörande test Testfall
Senast uppdaterad 19/5 2014 klo 15:30 av Svante Arvedson

## Förkrav
* Användaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med användarnamnet *GulligaHannes* och lösenordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Lektion</th>
        <th>Indata</th>
        <th>Förväntat resultat</th>
    </tr>
    <tr>
        <td>AF3-TF1</td>
        <td>Användaren öppnar en lektion</td>
        <td>Barocken</td>
        <td>Användaren klickar på länken <i>Barocken</i></td>
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
        <td>Barocken</td>
        <td>Användaren skriver in adressen "root/lektion/12/barocken"</td>
        <td>Användaren skickas vidare till Login-sidan</td>
    </tr>
    <tr>
        <td>AF3-TF4</td>
        <td>Ett test öppnas, fylls i och skickas. Resultatet visas upp.</td>
        <td>Barocken</td>
        <td>Alternativ 1 på samtliga frågor</td>
        <td>Resultatet visas upp på skärmen och antalet poäng presenteras. Korrekt svar markeras med grönt och fel svar markeras med rött. Resultatet sparas i databasen.</td>
    </tr>
    <tr>
        <td>AF3-TF5</td>
        <td>Ett test öppnas och skickas utan att några alternativ är ifyllda. Resultatet visas upp.</td>
        <td>Barocken</td>
        <td>Inga alternativ väljs</td>
        <td>Resultatet visas upp på skärmen och antalet poäng är 0. Resultatet sparas i databasen.</td>
    </tr>
    <tr>
        <td>AF3-TF6</td>
        <td>Användaren försöker nå en resultatsida utan att ha gjort ett test.</td>
        <td></td>
        <td>Användaren skriver in adressen "root/lektion/resultat"</td>
        <td>Användaren skickas vidare till startsidan</td>
    </tr>
    <tr>
        <td>AF3-TF7</td>
        <td>En ickeinloggad användare försöker nå en resultatsida.</td>
        <td></td>
        <td>Användaren skriver in adressen "root/lektion/resultat"</td>
        <td>Användaren skickas vidare till Login-sidan</td>
    </tr>
    <tr>
        <td>AF3-TF8</td>
        <td>En användare hämtar samma test två gånger och får frågorna och svarsalternativen i slumpordning</td>
        <td>Barocken</td>
        <td>Användaren hämtar testet för lektionen Barocken två gånger</td>
        <td>Frågor och svarsalternativ på testen ligger i olika ordning i de olika testerna.</td>
    </tr>
</table>
