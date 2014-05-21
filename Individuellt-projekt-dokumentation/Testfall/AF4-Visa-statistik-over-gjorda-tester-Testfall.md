# AF4 - Visa statistik över gjorda tester Testfall
Senast uppdaterad 21/5 2014 klo 14:00 av Svante Arvedson

## Förkrav
* Användaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med användarnamnet *GulligaHannes* och lösenordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Indata</th>
        <th>Förväntat resultat</th>
    </tr>
    <tr>
        <td>AF4-TF1</td>
        <td>Användaren visar statistik över sina gjorda tester.</td>
        <td>Användaren klickar på länken "Mina resultat" i navigationen.</td>
        <td>En sida med användarens resultat visas upp.</td>
    </tr>
    <tr>
        <td>AF4-TF2</td>
        <td>En ej inloggad användare efterfrågar sidan. I det här testet ska användaren inte vara inloggad.</td>
        <td>Användaren skriver in adressen "root/resultat"</td>
        <td>Anvädaren får upp login-sidan.</td>
    </tr>
    <tr>
        <td>AF4-TF3</td>
        <td>En användaren utan resultat efterfrågar sidan, får upp meddelande "Inga resultat". I det här testet ska användaren vara inloggad som användarnamn: <i>RikaIdioten</i> och lösenord: <i>12345678</i></td>
        <td>Användaren klickar på länken "Mina resultat" i navigationen.</td>
        <td>Användaren får upp sidan med meddelanden "Inga resultat".</td>
    </tr>
    <tr>
        <td>AF4-TF4</td>
        <td>En användaren efterfrågar resultatsidan, men det inträffar ett fel på servern. I det här testet skall databaslösenordet i databases.yml vara felaktigt för att simulera ett serverfel.</td>
        <td>Användaren klickar på länken "Mina resultat" i navigationen.</td>
        <td>Användaren får upp en error500 sida.</td>
    </tr>
</table>
