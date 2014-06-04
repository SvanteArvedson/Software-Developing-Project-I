# Tabellbeskrivning och Referentiell integritet
Senast ändrad den 7/5 2014 klo 16:30 av Svante Arvedson

## Tabellbeskrivning

### answer
<table>
    <tr>
        <th>kolumn</th>
        <th>typ</th>
        <th>nullvärde tillåtet</th>
        <th>defaultvärde</th>
        <th>primärnyckel</th>
        <th>referensnyckel till</th>
    </tr>
    <tr>
        <td>answerID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td></td>
    </tr>
    <tr>
        <td>text</td>
        <td>varchar(255)</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

### incorrectAnswer
<table>
    <tr>
        <th>kolumn</th>
        <th>typ</th>
        <th>nullvärde tillåtet</th>
        <th>defaultvärde</th>
        <th>primärnyckel</th>
        <th>referensnyckel till</th>
    </tr>
    <tr>
        <td>questionID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td>question</td>
    </tr>
    <tr>
        <td>answerID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td>answer</td>
    </tr>
</table>

### lesson
<table>
    <tr>
        <th>kolumn</th>
        <th>typ</th>
        <th>nullvärde tillåtet</th>
        <th>defaultvärde</th>
        <th>primärnyckel</th>
        <th>referensnyckel till</th>
    </tr>
    <tr>
        <td>lessonID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td></td>
    </tr>
    <tr>
        <td>text</td>
        <td>text</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>title</td>
        <td>varchar(40)</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

### result
<table>
    <tr>
        <th>kolumn</th>
        <th>typ</th>
        <th>nullvärde tillåtet</th>
        <th>defaultvärde</th>
        <th>primärnyckel</th>
        <th>referensnyckel till</th>
    </tr>
    <tr>
        <td>resultID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td></td>
    </tr>
    <tr>
        <td>lessonID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td>lesson</td>
    </tr>
    <tr>
        <td>userID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td>user</td>
    </tr>
    <tr>
        <td>score</td>
        <td>tinyint</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>maxScore</td>
        <td>tinyint</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>created_at</td>
        <td>datetime</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

### question
<table>
        <th>kolumn</th>
        <th>typ</th>
        <th>nullvärde tillåtet</th>
        <th>defaultvärde</th>
        <th>primärnyckel</th>
        <th>referensnyckel till</th>
    </tr>
    <tr>
        <td>questionID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td></td>
    </tr>
    <tr>
        <td>text</td>
        <td>varchar(255)</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>answerID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td>answer</td>
    </tr>
</table>

### quiz
<table>
    <tr>
        <th>kolumn</th>
        <th>typ</th>
        <th>nullvärde tillåtet</th>
        <th>defaultvärde</th>
        <th>primärnyckel</th>
        <th>referensnyckel till</th>
    </tr>
    <tr>
        <td>lessonID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td>lesson</td>
    </tr>
    <tr>
        <td>questionID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td>question</td>
    </tr>
</table>

### user
<table>
    <tr>
        <th>kolumn</th>
        <th>typ</th>
        <th>nullvärde tillåtet</th>
        <th>defaultvärde</th>
        <th>primärnyckel</th>
        <th>referensnyckel till</th>
    </tr>
    <tr>
        <td>userID</td>
        <td>integer</td>
        <td>nej</td>
        <td></td>
        <td>ja</td>
        <td></td>
    </tr>
    <tr>
        <td>username</td>
        <td>varchar(25)</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>password</td>
        <td>varchar(8)</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>name</td>
        <td>varchar(40)</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>email</td>
        <td>varchar(50)</td>
        <td>nej</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

## Referentiell integritet
<table>
    <tr>
        <th>Relation</th>
        <th>Relationstyp</th>
        <th>RI</th>
        <th>On Delete</th>
        <th>On Update</th>
    </tr>
    <tr>
        <td>answer --> incorrectAnswer</td>
        <td>1:n</td>
        <td>ja</td>
        <td>No Action</td>
        <td>No Action</td>
    </tr>
    <tr>
        <td>answer --> question</td>
        <td>1:n</td>
        <td>ja</td>
        <td>No Action</td>
        <td>No Action</td>
    </tr>
    <tr>
        <td>lesson --> result</td>
        <td>1:n</td>
        <td>ja</td>
        <td>No Action</td>
        <td>No Action</td>
    </tr>
    <tr>
        <td>lesson --> quiz</td>
        <td>1:n</td>
        <td>ja</td>
        <td>No Action</td>
        <td>No Action</td>
    </tr>
    <tr>
        <td>question --> incorrectAnswer</td>
        <td>1:n</td>
        <td>ja</td>
        <td>No Action</td>
        <td>No Action</td>
    </tr>
    <tr>
        <td>question --> quiz</td>
        <td>1:n</td>
        <td>ja</td>
        <td>No Action</td>
        <td>No Action</td>
    </tr>
    <tr>
        <td>user --> result</td>
        <td>1:n</td>
        <td>ja</td>
        <td>No Action</td>
        <td>No Action</td>
    </tr>
</table>