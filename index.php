<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <header>
        <a id="logo" href="index.html"><img src="/img/ticket (1).svg" alt=""></a>
    </header>
    <main>
        <div class="vse">
            <div class="nadpis">
                <h1 id="title">TICKET CREATOR</h1>
            </div>
            <div class="ticket">
                <form action="">
                    <label id="jmeno" for="fname">Křesní jméno:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label id="prijmeni" for="lname">Příjmení:</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label id="problem" for="typ">Typ problému:</label><br>
                    <select id="seznam">
                        <option value="něco">něco</option>
                        <option value="něco">něco</option>
                        <option value="něco">něco</option>
                        <option value="něco" selected>něco</option>
                      </select>
                    <input id="tlacitko" type="submit" value="Poslat">
                  </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>