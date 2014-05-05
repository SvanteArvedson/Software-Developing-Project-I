# AF1 - Registrera ny anv�ndare Testfall
Senast uppdaterad 29/4 2014 klo 17:30 av Svante Arvedson

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
        <td>AF1-TF1</td>
        <td>Lyckad registrering</td>
        <td>Anv�ndarnamn: <i>Gurkan</i><br />L�senord: <i>4ttBr4L4</i><br />Upprepa l�senord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Anv�ndaren registreras och indexsidan visas med ett r�ttmeddelande</td>
    </tr>
    <tr>
        <td>AF1-TF2</td>
        <td>Misslyckad registrering, l�senorden f�r l�nga</td>
        <td>Anv�ndarnamn: <i>Gurkan</i><br />L�senord: <i>4ttBr4L4s4n4rd</i><br />Upprepa l�senord: <i>4ttBr4L4s4n4rd</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Anv�ndaren blir inte registrerad, formul�ret visas igen. Felmeddelande: <i>Max 8 tecken</i></td>
    </tr>
    <tr>
        <td>AF1-TF3</td>
        <td>Misslyckad registrering, ogiltig epostadress</td>
        <td>Anv�ndarnamn: <i>Gurkan</i><br />L�senord: <i>4ttBr4L4</i><br />Upprepa l�senord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkancoolhotmailcom</i></td>
        <td>Anv�ndaren blir inte registrerad, formul�ret visas igen. Felmeddelande: <i>Email ogiltig</i></td>
    </tr>
    <tr>
        <td>AF1-TF4</td>
        <td>Misslyckad registrering, l�senorden olika</td>
        <td>Anv�ndarnamn: <i>Gurkan</i><br />L�senord: <i>4ttBr4L4</i><br />Upprepa l�senord: <i>3ttBr3L3</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Anv�ndaren blir inte registrerad, formul�ret visas igen. Felmeddelande: <i>L�senord och Repetera l�senord m�ste vara samma</i></td>
    </tr>
    <tr>
        <td>AF1-TF5</td>
        <td>Misslyckad registrering, tomt inputf�lt</td>
        <td>Anv�ndarnamn: <i></i><br />L�senord: <i>4ttBr4L4</i><br />Upprepa l�senord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Anv�ndaren blir inte registrerad, formul�ret visas igen. Felmeddelande: <i>Anv�ndarnamn f�r ej l�mnas tomt</i></td>
    </tr>
    <tr>
        <td>AF1-TF6</td>
        <td>Misslyckad registrering, anv�ndarnamn finns redan</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>4ttBr4L4</i><br />Upprepa l�senord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Anv�ndaren blir inte registrerad, formul�ret visas igen. Felmeddelande: <i>Anv�ndarnamnet �r upptaget. V�lj ett annat.</i></td>
    </tr>
</table>
