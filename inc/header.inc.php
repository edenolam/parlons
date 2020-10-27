<DOCTYPE html>
<html lang="fr">
    <div class="menu">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <meta name="viewport" content="width=devivice-width, initial-scale=1.0">
        <!--fonts pour les polices -->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        <!--  font awesome pour les icones-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ProtectCoViD</title>
    </head>
    <body>
   
        <div class="topnav">
            <div class="search-container">
                <form action="/action_page.php">
                <input type="text" placeholder="Recherche.." name="Rechercher">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="language">
            <label for="langue">Selectionner une langue:</label>
                <select name="langue" id="langue">
                <optgroup label="Selectionner une langue">
                    <option value="français">French</option>
                    <option value="english">English</option>
                    <option value="spanish">Spanish</option>
                    <option value="deutsh">Deutsh</option>
                    <option value="italy">Italy</option>
                </optgroup>
                </select>
            </div>
            <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        </div>
    <header>
            <div class="titre_principal">
                <h1>PROTECT COVID</h1>
            </div>
        <div class="nav">
            <ul>
                <li><a href="index.php">La Covid-19</a></li>
                 <li><a href="lesmasques.php">Les Masques</a></li>
                <li><a href="lestests.php">Les différents tests</a></li>
                <li><a href="questionnaire.php">Questionnaire</a></li>
                <li><a href="parlons.php">Parlons Covid</a></li>
             </ul>
        </div>
      </header>
</div>
