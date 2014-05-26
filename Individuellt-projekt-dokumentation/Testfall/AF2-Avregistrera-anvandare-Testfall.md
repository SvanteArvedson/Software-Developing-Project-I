# AF2 - Avregistrera anv�ndare Testfall
Senast uppdaterad 27/5 2014 klo 00:30 av Svante Arvedson

## F�rkrav
* Anv�ndaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med anv�ndarnamnet *GulligaHannes* och l�senordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Anv�ndare som raderas</th>
        <th>Indata</th>
        <th>F�rv�ntat resultat</th>
    </tr>
    <tr>
        <td>AF2-TF1</td>
        <td>Lyckad radering av konto</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>12345678</i></td>
        <td>Kontot raderas. Systemet visar r�ttmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF2</td>
        <td>Misslyckad radering av konto, f�r l�ngt l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>1234567890123456789</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF3</td>
        <td>Misslyckad radering av konto, f�r kort l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>123</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF4</td>
        <td>Misslyckad radering av konto, tomt l�senordsf�lt</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i></i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF5</td>
        <td>Misslyckad radering av konto, fel l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>98765432</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF6</td>
        <td>Lyckad radering endast genom att anv�nda tangentbordet.</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>98765432</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
</table>
