# DF1 - Logga in Testfall
Senast uppdaterad 25/4 2014 klo 13:30 av Svante Arvedson

Testfall f�r [DF1](/../Anvandningsfall/DF1-Logga-in.md). Anv�ndaren loggar in i systemet.

## F�rkrav
Inga f�rkrav.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Indata</th>
        <th>F�rv�ntat resultat</th>
    </tr>
    <tr>
        <td>DF1-TF1</td>
        <td>Lyckad inloggning</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i></td>
        <td>Anv�ndaren blir inloggad</td>
    </tr>
    <tr>
        <td>DF1-TF2</td>
        <td>Inloggningsf�rs�k med fel l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345679</i></td>
        <td>Anv�ndaren blir inte inloggad. Felmeddelande: <i>Felaktigt anv�narnamn eller l�senord</i></td>
    </tr>
    <tr>
        <td>DF1-TF3</td>
        <td>Inloggningsf�rs�k med tomma inputf�lt</td>
        <td>Anv�ndarnamn: <br />L�senord: </td>
        <td>Anv�ndaren blir inte inloggad. Felmeddelande: <i>F�r ej l�mnas tomt</i></td>
    </tr>
    <tr>
        <td>DF1-TF4</td>
        <td>Inloggningsf�rs�k med f�r l�nga str�ngar som input</td>
        <td>Anv�ndarnamn: <i>abcdabcdabcdabcdabcdabcdabcd</i><br />L�senord: <i>abcdabcdabcd</i></td>
        <td>Anv�ndaren blir inte inloggad. Felmeddelande: <i>Anv�ndarnamn f�r vara max 25 tecken</i> och <i>L�senord f�r vara max 8 tecken</i></td>
    </tr>
    <tr>
        <td>DF1-TF5</td>
        <td>Inloggningsf�rs�k med fel l�senord (test om funktionen �r case sensitive)</td>
        <td>Anv�ndarnamn: <i>gulligahannes</i><br />L�senord: <i>12345678</i></td>
        <td>Anv�ndaren blir inte inloggad. Felmeddelande: <i>Felaktigt anv�narnamn eller l�senord</i></td>
    </tr>
</table>