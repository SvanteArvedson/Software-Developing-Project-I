# AF3 - L�r en lektion och g�r tillh�rande test Testfall
Senast uppdaterad 19/5 2014 klo 15:30 av Svante Arvedson

## F�rkrav
* Anv�ndaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med anv�ndarnamnet *GulligaHannes* och l�senordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Lektion</th>
        <th>Indata</th>
        <th>F�rv�ntat resultat</th>
    </tr>
    <tr>
        <td>AF3-TF1</td>
        <td>Anv�ndaren �ppnar en lektion</td>
        <td>Barocken</td>
        <td>Anv�ndaren klickar p� l�nken <i>Barocken</i></td>
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
        <td>Barocken</td>
        <td>Anv�ndaren skriver in adressen "root/lektion/12/barocken"</td>
        <td>Anv�ndaren skickas vidare till Login-sidan</td>
    </tr>
    <tr>
        <td>AF3-TF4</td>
        <td>Ett test �ppnas, fylls i och skickas. Resultatet visas upp.</td>
        <td>Barocken</td>
        <td>Alternativ 1 p� samtliga fr�gor</td>
        <td>Resultatet visas upp p� sk�rmen och antalet po�ng presenteras. Korrekt svar markeras med gr�nt och fel svar markeras med r�tt. Resultatet sparas i databasen.</td>
    </tr>
    <tr>
        <td>AF3-TF5</td>
        <td>Ett test �ppnas och skickas utan att n�gra alternativ �r ifyllda. Resultatet visas upp.</td>
        <td>Barocken</td>
        <td>Inga alternativ v�ljs</td>
        <td>Resultatet visas upp p� sk�rmen och antalet po�ng �r 0. Resultatet sparas i databasen.</td>
    </tr>
    <tr>
        <td>AF3-TF6</td>
        <td>Anv�ndaren f�rs�ker n� en resultatsida utan att ha gjort ett test.</td>
        <td></td>
        <td>Anv�ndaren skriver in adressen "root/lektion/resultat"</td>
        <td>Anv�ndaren skickas vidare till startsidan</td>
    </tr>
    <tr>
        <td>AF3-TF7</td>
        <td>En ickeinloggad anv�ndare f�rs�ker n� en resultatsida.</td>
        <td></td>
        <td>Anv�ndaren skriver in adressen "root/lektion/resultat"</td>
        <td>Anv�ndaren skickas vidare till Login-sidan</td>
    </tr>
    <tr>
        <td>AF3-TF8</td>
        <td>En anv�ndare h�mtar samma test tv� g�nger och f�r fr�gorna och svarsalternativen i slumpordning</td>
        <td>Barocken</td>
        <td>Anv�ndaren h�mtar testet f�r lektionen Barocken tv� g�nger</td>
        <td>Fr�gor och svarsalternativ p� testen ligger i olika ordning i de olika testerna.</td>
    </tr>
</table>
