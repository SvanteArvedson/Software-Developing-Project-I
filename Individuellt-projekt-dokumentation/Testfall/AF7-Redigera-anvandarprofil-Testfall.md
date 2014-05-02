# AF7 - Redigera anv�ndarprofil Testfall
Senast uppdaterad 2/5 2014 klo 14:00 av Svante Arvedson

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
        <td>AF7-TF1</td>
        <td>Lyckad �ndring av anv�ndaruppgifter</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>FulaHannes</i><br />L�senord: <i>98765432</i><br />L�senord igen: <i>98765432</i><br />Namn: <i>Hannes Hansson</i><br />Email: <i>fula_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Redigeringen lyckas, �ndringarna sparas. Systemet visar r�ttmeddelande</td>
    </tr>
    <tr>
        <td>AF7-TF2</td>
        <td>Misslyckad �ndring av anv�ndaruppgifter - F�r l�ngt anv�ndarnamn</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>GulligaHannesFastMedMassaExtraBokst�ver</i><br />L�senord: <i>12345678</i><br />L�senord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, �ndringarna sparas inte. Systemet visar felmeddelande <i>Max 40 tecken</i></td>
    </tr>
    <tr>
        <td>AF7-TF3</td>
        <td>Misslyckad �ndring av anv�ndaruppgifter - Ogiltig epostadress</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />L�senord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulligahanneshotmailcom</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, �ndringarna sparas inte. Systemet visar felmeddelande <i>Ogiltig epostadress</i></td>
    </tr>
    <tr>
        <td>AF7-TF4</td>
        <td>Misslyckad �ndring av anv�ndaruppgifter - Anv�ndarnamn finns redan</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>StarkaKatten</i><br />L�senord: <i>12345678</i><br />L�senord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, �ndringarna sparas inte. Systemet visar felmeddelande <i>Anv�ndarnamnet �r upptaget. V�lj ett annat.</i></td>
    </tr>
    <tr>
        <td>AF7-TF5</td>
        <td>Misslyckad �ndring av anv�ndaruppgifter - L�senord och Repetera l�senord �r olika</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>54687913</i><br />L�senord igen: <i>54687319</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, �ndringarna sparas inte. Systemet visar felmeddelande <i>L�senord och Repetera l�senord var olika</i></td>
    </tr>
    <tr>
        <td>AF7-TF6</td>
        <td>Misslyckad �ndring av anv�ndaruppgifter - Tomma indataf�lt</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i></i><br />L�senord: <i>12345678</i><br />L�senord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, �ndringarna sparas inte. Systemet visar felmeddelande <i>F�r ej l�mnas tomt</i></td>
    </tr>
    <tr>
        <td>AF7-TF7</td>
        <td>Misslyckad �ndring av anv�ndaruppgifter - Fel l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>98765432</i><br />L�senord igen: <i>98765432</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>22233314</i></td>
        <td>Redigeringen misslyckas, �ndringarna sparas inte. Systemet visar felmeddelande <i>Du m�ste ange ditt gamla l�senord f�r att kunna spara �ndringarna.</i></td>
    </tr>
    <tr>
        <td>AF7-TF8</td>
        <td>Misslyckad �ndring av anv�ndaruppgifter - F�r kort l�senord</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>987654</i><br />L�senord igen: <i>987654</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, �ndringarna sparas inte. Systemet visar felmeddelande <i>M�ste vara 8 tecken</i></td>
    </tr>
    <tr>
        <td>AF7-TF9</td>
        <td>Ingen �ndring av anv�ndaruppgifter - Inga �ndringar gjorda</td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Anv�ndarnamn: <i>GulligaHannes</i><br />L�senord: <i>12345678</i><br />L�senord igen: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Nuvarande l�senord: <i>12345678</i></td>
        <td>Inga �ndringar gjorda. Systemet visar meddelande <i>Du �ndrade inte dina kontouppgifter</i></td>
    </tr>
</table>
