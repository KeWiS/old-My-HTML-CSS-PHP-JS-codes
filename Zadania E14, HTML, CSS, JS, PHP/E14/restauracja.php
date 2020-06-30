<!DOCTYPE html>
  <html>
      <head>
          <meta charset = "utf-8">
          <title>Restauracja Wszystkie Smaki</title>
          <link rel = "stylesheet" type = "text/css" href = "styl1.css">
      </head>
      <body>
        <header>
          <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
        </header>
        <section class = "leftp">
          <img src = "menu.jpg" alt = "Nasze danie">
        </section>
        <section class = "rightp">
          <h4>U nas dobrze zjesz!</h4>
          <ul>
            <li>Obiady od 40zł</li>
            <li>Przekąski od 10zł</li>
            <li>Kolacje od 20zł</li>
          </ul>
        </section>  
        <section class = "bottomp">
          <form method = "POST" action = "rezerwacja.php">
            <h2>Zarezerwuj stolik on-line</h2>
            Data (format rrrr-mm-dd)<br>
            <input type = "text" name = "data"><br>
            Ile osób?<br>
            <input type = "number" name = "osoby"><br>
            Twój numer telefonu:<br>
            <input type = "text" name = "telefon"><br>
            <input type = "checkbox"> Zgadzam się na przetwarzanie moich danych osobowych<br>
            <button type = "reset">WYCZYŚĆ</button>
            <button type = "submit">REZERWUJ</button>
          </form>
        </section>
        <footer>
          Stronę opracował: <i>Michał Siwek</i>
        </footer>
      </body>
  </html>