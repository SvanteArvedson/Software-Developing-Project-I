# Testrapport 2014-05-20
Test av systemet enligt version *release iteration 5*. Testmilj�n �r en Apache server och webbl�sare *Firefox*, *Chrome*, *IE 9* 
och *Opera*, testerna g�rs p� en b�rbar dator.    
Testerna g�rs den 20 maj 2014.

<table>
    <tr>
        <th>Testfall</th>
        <th>Webbl�sare</th>
        <th>Pass/Fail</th>
        <th>Kommentar</th>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF1</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Det borde finnas en l�nk till quizet direkt n�bar fr�n startsidan. Nu m�ste man visa lektionen f�rst f�r att kunna komma �t testet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF2</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Jag m�ste tillverka en snygg 404-sida. Symfonys defaultsida �r inte snygg...</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF3</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF4</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td>Mer detaljarbete p� designen av r�tt och fel presentationerna beh�vs f�r att f� ett trevligt resultat</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF5</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Alternativet som anv�ndaren svarade b�r vara ifyllt under presentatione av resultatet, d� kan man se skillnad p� vilka fr�gor som blev besvarade och vilka som inte blev det.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF6</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF7</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td></td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF8</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td></td>
    </tr>
</table>

## F�rb�ttningar
Vid renderingen av resultatet och av anv�ndarens svar s� b�r de valda v�rdena fyllas i. Just nu vet man 
inte om endast ett gr�nt f�lt betyder att anv�ndaren svarade r�tt eller om det betyder att anv�ndaren 
inte svarade alls. Det beh�vs ocks� mer detaljarbete vad g�ller utseendet f�r att presentationen av 
resultatet ska bli snyggt.    
Quizen skulle beh�va vara direkt �tkomliga fr�n startsidan, det �r de inte nu.

## K�nsla av systemet
Formul�ret k�nndes enkelt att anv�nda. Det skulle dock beh�vas en varning eller bekr�ftelsedialog 
innan svaren skickas in f�r att inga misstag skall ske. 404-sodan �r bedr�vlig just nu, jag beh�ver 
skapa en egen snyggare.

## Tester som saknas
Hur beter sig quizen om databasen inte �r tillg�nglig? Hur �r det med prestandan, det sker ganska 
m�nga anrop till databasen n�r ett Quiz skapas och bearbetas.