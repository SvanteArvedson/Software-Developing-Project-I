# AF2 - Avregistrera användare Testfall
Senast uppdaterad 27/5 2014 klo 00:30 av Svante Arvedson

## Förkrav
* Användaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med användarnamnet *GulligaHannes* och lösenordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Användare som raderas</th>
        <th>Indata</th>
        <th>Förväntat resultat</th>
    </tr>
    <tr>
        <td>AF2-TF1</td>
        <td>Lyckad radering av konto</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>12345678</i></td>
        <td>Kontot raderas. Systemet visar rättmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF2</td>
        <td>Misslyckad radering av konto, för långt lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>1234567890123456789</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF3</td>
        <td>Misslyckad radering av konto, för kort lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>123</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF4</td>
        <td>Misslyckad radering av konto, tomt lösenordsfält</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i></i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF5</td>
        <td>Misslyckad radering av konto, fel lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>98765432</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
    <tr>
        <td>AF2-TF6</td>
        <td>Lyckad radering endast genom att använda tangentbordet.</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>98765432</i></td>
        <td>Kontot raderas inte. Systemet visar felmeddelande.</td>
    </tr>
</table>
