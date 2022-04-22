<html lang="pl">

<head>
    <title>Notatnik</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="/public/style.css" rel="stylesheet">
</head>

<body class="body">
    <div class="wrapper">
        <div class="header">
            <a href="/">
                <h1><i class="far fa-clipboard"></i>Moje notatki</h1>
            </a>
        </div>

        <div class="container">
            <div class="menu">
                <ul>
                    <li><a href="/">Strona główna</a></li>
                    <li><a href="/?action=create">Stwórz nową notatkę</a></li>
                </ul>
            </div>

            <div class="page">
                <?php require_once "templates/pages/$page.php";?>
            </div>
        </div>

        <footer>
            <p>Notatki - projekt w kursie PHP</p>
        </footer>
    </div>
</body>

</html>