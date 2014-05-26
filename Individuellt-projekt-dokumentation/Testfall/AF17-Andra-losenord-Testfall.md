# AF17 - �ndra l�senord Testfall
Senast uppdaterad 27/5 2014 klo 00:30 av Svante Arvedson

## F�rkrav
* Anv�ndaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med anv�ndarnamnet *GulligaHannes* och l�senordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Anv�ndare som redigeras</th>
        <th>Indata</th>
        <th>F�rv�ntat resultat</th>
    </tr>
    <tr>
        <td>AF17-TF1</td>
        <td>Lyckad �ndring av l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>98765432</i><br />L�senord igen: <i>98765432</i><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>�ndringen lyckas, det nya l�senordet sparas. Systemet visar r�ttmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF2</td>
        <td>Misslyckad �ndring av l�senord - L�senord f�r kort</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>9876</i><br />L�senord igen: <i>9876</i><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>�ndringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF3</td>
        <td>Misslyckad �ndring av l�senord - L�senord f�r l�ngt</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>9876543210</i><br />L�senord igen: <i>9876543210</i><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>�ndringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF4</td>
        <td>Misslyckad �ndring av l�senord - Tomma inmatningsf�lt</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i></i><br />L�senord igen: <i></i><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>�ndringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF5</td>
        <td>Misslyckad �ndring av l�senord - L�senorden olika</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>97643182</i><br />L�senord igen: <i>25846971</i><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>�ndringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF6</td>
        <td>Misslyckad �ndring av l�senord - Felaktigt nuvarande l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>98765432</i><br />L�senord igen: <i>98765432</i><br />Nuvarande l�senord: <i>asdfghjk</i></td>
        <td>�ndringen misslyckas. Systemet visar felmeddelande</td>
    </tr>
    <tr>
        <td>AF17-TF7</td>
        <td>Lyckad �ndring av l�senord endast genom att anv�nda tangentbordet.</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>L�senord: <i>98765432</i><br />L�senord igen: <i>98765432</i><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>�ndringen lyckas, det nya l�senordet sparas. Systemet visar r�ttmeddelande.</td>
    </tr>
</table>
