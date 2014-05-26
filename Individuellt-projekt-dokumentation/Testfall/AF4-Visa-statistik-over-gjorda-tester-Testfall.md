# AF4 - Visa statistik �ver gjorda tester Testfall
Senast uppdaterad 27/5 2014 klo 00:30 av Svante Arvedson

## F�rkrav
* Anv�ndaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med anv�ndarnamnet *GulligaHannes* och l�senordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Indata</th>
        <th>F�rv�ntat resultat</th>
    </tr>
    <tr>
        <td>AF4-TF1</td>
        <td>Anv�ndaren visar statistik �ver sina gjorda tester.</td>
        <td>Anv�ndaren klickar p� l�nken "Mina resultat" i navigationen.</td>
        <td>En sida med anv�ndarens resultat visas upp.</td>
    </tr>
    <tr>
        <td>AF4-TF2</td>
        <td>En ej inloggad anv�ndare efterfr�gar sidan. I det h�r testet ska anv�ndaren inte vara inloggad.</td>
        <td>Anv�ndaren skriver in adressen "root/resultat"</td>
        <td>Anv�daren f�r upp login-sidan.</td>
    </tr>
    <tr>
        <td>AF4-TF3</td>
        <td>En anv�ndaren utan resultat efterfr�gar sidan, f�r upp meddelande "Inga resultat". I det h�r testet ska anv�ndaren vara inloggad som anv�ndarnamn: <i>RikaIdioten</i> och l�senord: <i>12345678</i></td>
        <td>Anv�ndaren klickar p� l�nken "Mina resultat" i navigationen.</td>
        <td>Anv�ndaren f�r upp sidan med meddelanden "Inga resultat".</td>
    </tr>
    <tr>
        <td>AF4-TF4</td>
        <td>En anv�ndaren efterfr�gar resultatsidan, men det intr�ffar ett fel p� servern. I det h�r testet skall databasl�senordet i databases.yml vara felaktigt f�r att simulera ett serverfel.</td>
        <td>Anv�ndaren klickar p� l�nken "Mina resultat" i navigationen.</td>
        <td>Anv�ndaren f�r upp en error500 sida.</td>
    </tr>
    <tr>
        <td>AF4-TF5</td>
        <td>Anv�ndaren visar statistik �ver sina gjorda tester endast genom att anv�nda tangentbordet.</td>
        <td>Anv�ndaren klickar p� l�nken "Mina resultat" i navigationen.</td>
        <td>En sida med anv�ndarens resultat visas upp.</td>
    </tr>
</table>
