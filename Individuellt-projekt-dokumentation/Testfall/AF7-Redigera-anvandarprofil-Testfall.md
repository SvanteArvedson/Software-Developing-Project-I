# AF7 - Redigera användarprofil Testfall
Senast uppdaterad 2/5 2014 klo 14:00 av Svante Arvedson

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
        <td>AF7-TF1</td>
        <td>Lyckad ändring av användaruppgifter</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>FulaHannes</i><br />Lösenord: <i>98765432</i><br />Lösenord igen: <i>98765432</i><br />Namn: <i>Hannes Hansson</i><br />Email: <i>fula_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Redigeringen lyckas, ändringarna sparas. Systemet visar rättmeddelande</td>
    </tr>
    <tr>
        <td>AF7-TF2</td>
        <td>Misslyckad ändring av användaruppgifter - För långt användarnamn</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannesFastMedMassaExtraBokstäver</i><br />Lösenord: <i>12345678</i><br />Lösenord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Max 40 tecken</i></td>
    </tr>
    <tr>
        <td>AF7-TF3</td>
        <td>Misslyckad ändring av användaruppgifter - Ogiltig epostadress</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Lösenord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulligahanneshotmailcom</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Ogiltig epostadress</i></td>
    </tr>
    <tr>
        <td>AF7-TF4</td>
        <td>Misslyckad ändring av användaruppgifter - Användarnamn finns redan</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>StarkaKatten</i><br />Lösenord: <i>12345678</i><br />Lösenord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Användarnamnet är upptaget. Välj ett annat.</i></td>
    </tr>
    <tr>
        <td>AF7-TF5</td>
        <td>Misslyckad ändring av användaruppgifter - Lösenord och Repetera lösenord är olika</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>54687913</i><br />Lösenord igen: <i>54687319</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Lösenord och Repetera lösenord var olika</i></td>
    </tr>
    <tr>
        <td>AF7-TF6</td>
        <td>Misslyckad ändring av användaruppgifter - Tomma indatafält</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i></i><br />Lösenord: <i>12345678</i><br />Lösenord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Får ej lämnas tomt</i></td>
    </tr>
    <tr>
        <td>AF7-TF7</td>
        <td>Misslyckad ändring av användaruppgifter - Fel lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>98765432</i><br />Lösenord igen: <i>98765432</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>22233314</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Du måste ange ditt gamla lösenord för att kunna spara ändringarna.</i></td>
    </tr>
    <tr>
        <td>AF7-TF8</td>
        <td>Misslyckad ändring av användaruppgifter - För kort lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>987654</i><br />Lösenord igen: <i>987654</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Måste vara 8 tecken</i></td>
    </tr>
    <tr>
        <td>AF7-TF9</td>
        <td>Ingen ändring av användaruppgifter - Inga ändringar gjorda</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Lösenord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande lösenord: <i>12345678</i></td>
        <td>Inga ändringar gjorda. Systemet visar meddelande <i>Du ändrade inte dina kontouppgifter</i></td>
    </tr>
</table>
