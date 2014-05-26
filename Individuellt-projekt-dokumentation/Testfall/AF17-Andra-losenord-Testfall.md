# AF17 - Ändra lösenord Testfall
Senast uppdaterad 27/5 2014 klo 00:30 av Svante Arvedson

## Förkrav
* Användaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med användarnamnet *GulligaHannes* och lösenordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Användare som redigeras</th>
        <th>Indata</th>
        <th>Förväntat resultat</th>
    </tr>
    <tr>
        <td>AF17-TF1</td>
        <td>Lyckad ändring av lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>98765432</i><br />Lösenord igen: <i>98765432</i><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Ändringen lyckas, det nya lösenordet sparas. Systemet visar rättmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF2</td>
        <td>Misslyckad ändring av lösenord - Lösenord för kort</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>9876</i><br />Lösenord igen: <i>9876</i><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Ändringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF3</td>
        <td>Misslyckad ändring av lösenord - Lösenord för långt</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>9876543210</i><br />Lösenord igen: <i>9876543210</i><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Ändringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF4</td>
        <td>Misslyckad ändring av lösenord - Tomma inmatningsfält</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i></i><br />Lösenord igen: <i></i><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Ändringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF5</td>
        <td>Misslyckad ändring av lösenord - Lösenorden olika</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>97643182</i><br />Lösenord igen: <i>25846971</i><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Ändringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF6</td>
        <td>Misslyckad ändring av lösenord - Felaktigt nuvarande lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>98765432</i><br />Lösenord igen: <i>98765432</i><br />Nuvarande lösenord: <i>asdfghjk</i></td>
        <td>Ändringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF7</td>
        <td>Lyckad ändring av lösenord endast genom att använda tangentbordet.</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Lösenord: <i>98765432</i><br />Lösenord igen: <i>98765432</i><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Ändringen lyckas, det nya lösenordet sparas. Systemet visar rättmeddelande.</td>
    </tr>
</table>
