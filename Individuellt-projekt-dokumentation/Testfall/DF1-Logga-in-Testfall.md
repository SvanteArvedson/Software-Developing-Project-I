# DF1 - Logga in Testfall
Senast uppdaterad 25/4 2014 klo 13:30 av Svante Arvedson

Testfall för [DF1](/../Anvandningsfall/DF1-Logga-in.md). Användaren loggar in i systemet.

## Förkrav
Inga förkrav.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Indata</th>
        <th>Förväntat resultat</th>
    </tr>
    <tr>
        <td>DF1-TF1</td>
        <td>Lyckad inloggning</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i></td>
        <td>Användaren blir inloggad</td>
    </tr>
    <tr>
        <td>DF1-TF2</td>
        <td>Inloggningsförsök med fel lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345679</i></td>
        <td>Användaren blir inte inloggad. Felmeddelande: <i>Felaktigt använarnamn eller lösenord</i></td>
    </tr>
    <tr>
        <td>DF1-TF3</td>
        <td>Inloggningsförsök med tomma inputfält</td>
        <td>Användarnamn: <br />Lösenord: </td>
        <td>Användaren blir inte inloggad. Felmeddelande: <i>Får ej lämnas tomt</i></td>
    </tr>
    <tr>
        <td>DF1-TF4</td>
        <td>Inloggningsförsök med för långa strängar som input</td>
        <td>Användarnamn: <i>abcdabcdabcdabcdabcdabcdabcd</i><br />Lösenord: <i>abcdabcdabcd</i></td>
        <td>Användaren blir inte inloggad. Felmeddelande: <i>Användarnamn får vara max 25 tecken</i> och <i>Lösenord får vara max 8 tecken</i></td>
    </tr>
    <tr>
        <td>DF1-TF5</td>
        <td>Inloggningsförsök med fel lösenord (test om funktionen är case sensitive)</td>
        <td>Användarnamn: <i>gulligahannes</i><br />Lösenord: <i>12345678</i></td>
        <td>Användaren blir inte inloggad. Felmeddelande: <i>Felaktigt använarnamn eller lösenord</i></td>
    </tr>
</table>