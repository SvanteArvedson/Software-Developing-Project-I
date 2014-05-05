# AF1 - Registrera ny användare Testfall
Senast uppdaterad 29/4 2014 klo 17:30 av Svante Arvedson

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
        <td>AF1-TF1</td>
        <td>Lyckad registrering</td>
        <td>Användarnamn: <i>Gurkan</i><br />Lösenord: <i>4ttBr4L4</i><br />Upprepa lösenord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Användaren registreras och indexsidan visas med ett rättmeddelande</td>
    </tr>
    <tr>
        <td>AF1-TF2</td>
        <td>Misslyckad registrering, lösenorden för långa</td>
        <td>Användarnamn: <i>Gurkan</i><br />Lösenord: <i>4ttBr4L4s4n4rd</i><br />Upprepa lösenord: <i>4ttBr4L4s4n4rd</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Användaren blir inte registrerad, formuläret visas igen. Felmeddelande: <i>Max 8 tecken</i></td>
    </tr>
    <tr>
        <td>AF1-TF3</td>
        <td>Misslyckad registrering, ogiltig epostadress</td>
        <td>Användarnamn: <i>Gurkan</i><br />Lösenord: <i>4ttBr4L4</i><br />Upprepa lösenord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkancoolhotmailcom</i></td>
        <td>Användaren blir inte registrerad, formuläret visas igen. Felmeddelande: <i>Email ogiltig</i></td>
    </tr>
    <tr>
        <td>AF1-TF4</td>
        <td>Misslyckad registrering, lösenorden olika</td>
        <td>Användarnamn: <i>Gurkan</i><br />Lösenord: <i>4ttBr4L4</i><br />Upprepa lösenord: <i>3ttBr3L3</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Användaren blir inte registrerad, formuläret visas igen. Felmeddelande: <i>Lösenord och Repetera lösenord måste vara samma</i></td>
    </tr>
    <tr>
        <td>AF1-TF5</td>
        <td>Misslyckad registrering, tomt inputfält</td>
        <td>Användarnamn: <i></i><br />Lösenord: <i>4ttBr4L4</i><br />Upprepa lösenord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Användaren blir inte registrerad, formuläret visas igen. Felmeddelande: <i>Användarnamn får ej lämnas tomt</i></td>
    </tr>
    <tr>
        <td>AF1-TF6</td>
        <td>Misslyckad registrering, användarnamn finns redan</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>4ttBr4L4</i><br />Upprepa lösenord: <i>4ttBr4L4</i><br />Namn: <i>Gustav Hansson</i><br />Email: <i>gurkan_cool@hotmail.com</i></td>
        <td>Användaren blir inte registrerad, formuläret visas igen. Felmeddelande: <i>Användarnamnet är upptaget. Välj ett annat.</i></td>
    </tr>
</table>
