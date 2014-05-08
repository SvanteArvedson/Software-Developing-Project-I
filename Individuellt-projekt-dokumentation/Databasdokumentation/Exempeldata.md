# Exempeldata för databasen
Senast ändrad den 7/5 2014 klo 14:00 av Svante Arvedson

## user
<table>
    <tr>
        <th>userID</th>
        <th>username</th>
        <th>password</th>
        <th>name</th>
        <th>email</th>
    </tr>
    <tr>
        <td>1</td>
        <td>GulligaHannes</td>
        <td>12345678</td>
        <td>Hannes Karlsson</td>
        <td>gulliga_hannes@gmail.com</td>
    </tr>
    <tr>
        <td>2</td>
        <td>StarkaKatten</td>
        <td>12345678</td>
        <td>Julia Blomström</td>
        <td>starka_katten@hotmail.com</td>
    </tr>
</table>

## result
<table>
    <tr>
        <th>resultID</th>
        <th>lessonID</th>
        <th>userID</th>
        <th>score</th>
    </tr>
    <tr>
        <td>12</td>
        <td>5</td>
        <td>1</td>
        <td>8</td>

    </tr>
    <tr>
        <td>13</td>
        <td>5</td>
        <td>1</td>
        <td>6</td>
    </tr>
    <tr>
        <td>14</td>
        <td>5</td>
        <td>2</td>
        <td>10</td>

    </tr>
    <tr>
        <td>15</td>
        <td>6</td>
        <td>1</td>
        <td>8</td>
    </tr>
</table>

## lesson
<table>
    <tr>
        <th>lessonID</th>
        <th>text</th>
    </tr>
    <tr>
        <td>5</td>
        <td>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Donec hendrerit dolor lorem, ac iaculis nunc vulputate ut. 
            Sed eleifend auctor nulla, at pretium tortor molestie non. 
            Cras quis turpis leo. Aenean tincidunt, justo et fringilla 
            auctor, orci turpis molestie diam, nec elementum erat enim 
            eget eros. Donec lacinia egestas pellentesque.
        </td>
    </tr>
    <tr>
        <td>6</td>
        <td>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Aliquam quis ornare tellus. Pellentesque in libero non elit 
            luctus egestas euismod non diam. Suspendisse potenti. 
            Pellentesque pellentesque mattis dolor ut lobortis. Nullam 
            velit libero, porttitor vel congue rutrum, pharetra sed sapien.
        </td>
    </tr>
</table>

## question
<table>
    <tr>
        <th>questionID</th>
        <th>text</th>
        <th>answerID</th>
    </tr>
    <tr>
        <td>9</td>
        <td>Vad arbetade Georg Philipp Telemann med?</td>
        <td>2</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Vilken typ av instrument är en cembalo?</td>
        <td>7</td>
    </tr>
</table>

## answer
<table>
    <tr>
        <th>answerID</th>
        <th>text</th>
    </tr>
    <tr>
        <td>2</td>
        <td>
            Kompositör
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>
            Kyrkvaktmästare
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>
            Präst
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>
            Blåsinstrument
        </td>
    </tr>
    <tr>
        <td>6</td>
        <td>
            Byggnadsarbetare
        </td>
    </tr>
    <tr>
        <td>7</td>
        <td>
            Klaverinstrument
        </td>
    </tr>
    <tr>
        <td>8</td>
        <td>
            Bleckinstrument
        </td>
    </tr>
    <tr>
        <td>9</td>
        <td>
            Stråkinstrument
        </td>
    </tr>
</table>

## incorrectAnswer
<table>
    <tr>
        <th>questionID</th>
        <th>answerID</th>
    </tr>
    <tr>
        <td>9</td>
        <td>3</td>
    </tr>
    <tr>
        <td>9</td>
        <td>4</td>
    </tr>
    <tr>
        <td>9</td>
        <td>6</td>
    </tr>
    <tr>
        <td>10</td>
        <td>5</td>
    </tr>
    <tr>
        <td>10</td>
        <td>8</td>
    </tr>
    <tr>
        <td>10</td>
        <td>9</td>
    </tr>
</table>

## quiz
<table>
    <tr>
        <th>lessonID</th>
        <th>questionID</th>
    </tr>
    <tr>
        <td>5</td>
        <td>9</td>
    </tr>
    <tr>
        <td>5</td>
        <td>10</td>
    </tr>
</table>