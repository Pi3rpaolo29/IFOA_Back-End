<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php

        //Stampare la data di oggi in italiano in modo dinamico. Es: Mercoledì, 16 dicembre 2020
        /* date_default_timezone_set('Europe/Rome');
        echo date("N");
        echo date('l jS \of F Y h:i:s A'); */
        setlocale(LC_TIME, 'ita', 'it_IT.utf8');
        $data = strftime("%A, %d %B %Y");
        echo '<h2 class="text-center mt-4">' . utf8_encode($data) . '</h2>';
        
        //Crea l'array delle squadre di serie A e della relativa formazione. Usa i cicli per stampare i dati

        $formazioni_serie_a = [
            'Atalanta' => ['Gollini', 'Palomino', 'Djimsiti', 'Romero', 'Hateboer', 'De Roon', 'Freuler', 'Gosens', 'Malinovskyi', 'Muriel', 'Zapata'],
            'Bologna' => ['Skorupski', 'Tomiyasu', 'Medel', 'Soumaoro', 'Hickey', 'Schouten', 'Dominguez', 'Orsolini', 'Svanberg', 'Barrow', 'Arnautovic'],
            'Cagliari' => ['Cragno', 'Pezzella', 'Klavan', 'Carboni', 'Nandez', 'Marin', 'Duncan', 'Rog', 'Joao Pedro', 'Sottil', 'Pavoletti'],
            'Empoli' => ['Vicario', 'Bennacer', 'Ismael Bennacer', 'Marchizza', 'Gigliotti', 'Ucan', 'Farias', 'Bajrami', 'Bandinelli', 'Cutrone', 'Pinamonti'],
            'Fiorentina' => ['Dragowski', 'Milenkovic', 'Pezzella', 'Igor', 'Caceres', 'Duncan', 'Amrabat', 'Borja Valero', 'Ribery', 'Kouame', 'Vlahovic'],
            'Frosinone' => ['Zima', 'Bardini', 'Baker', 'Guerrieri', 'Szyminski', 'Torelli', 'Testardi', 'Cataldi', 'Vannucchi', 'Maiello', 'Novakovich'],
            'Genoa' => ['Perin', 'Masiello', 'Zapata', 'Bani', 'Sabelli', 'Badelj', 'Strootman', 'Zajc', 'Kulusevski', 'Rovella', 'Shomurodov'],
            'Hellas Verona' => ['Silvestri', 'Gunter', 'Cetin', 'Lovato', 'Faraoni', 'Veloso', 'Barak', 'Lazovic', 'Zaccagni', 'Tameze', 'Cancellieri'],
            'Inter' => ['Handanovic', 'Skriniar', 'De Vrij', 'Bastoni', 'Hakimi', 'Barella', 'Brozovic', 'Calhanoglu', 'Perisic', 'Martinez', 'Dzeko'],
            'Juventus' => ['Szczesny', 'Cuadrado', 'De Ligt', 'Chiellini', 'Sandro', 'Arthur', 'Locatelli', 'Rabiot', 'Kulusevski', 'Dybala', 'Morata'],
            'Lazio' => ['Strakosha', 'Mauricio', 'Marusic', 'Acerbi', 'Hysaj', 'Milinkovic-Savic', 'Leiva', 'Lulic', 'Felipe Anderson', 'Immobile', 'Correa'],
            'Lecce' => ['Gabriel', 'Calabria', 'Tomori', 'Kjaer', 'Hernandez', 'Kessie', 'Tonali', 'Diaz', 'Messias', 'Rebic', 'Giroud'],
            'Milan' => ['Perin', 'Masiello', 'Zapata', 'Bani', 'Sabelli', 'Badelj', 'Strootman', 'Zajc', 'Kulusevski', 'Rovella', 'Shomurodov'],
            'Monza' => ['Berardi', 'Benzia', 'Bianchimano', 'Donnarumma', 'Frattesi', 'Fumagalli', 'Nardi', 'Paletta', 'Riccio', 'Scaglia', 'Sikorski'],
            'Napoli' => ['Meret', 'Di Lorenzo', 'Manolas', 'Koulibaly', 'Ghoulam', 'Elmas', 'Ruiz', 'Zielinski', 'Insigne', 'Mertens', 'Osimhen'],
            'Roma' => ['Rui Patricio', 'Mancini', 'Smalling', 'Karsdorp', 'Viña', 'Cristante', 'Veretout', 'Zaniolo', 'Pellegrini', 'Mkhitaryan', 'Abraham'],
            'Salernitana' => ['Belec', 'Aya', 'Jaroszynski', 'Veseli', 'Karol', 'Obi', 'Coulibaly', 'Odjer', 'Kurtic', 'Gyasi', 'Ribery'],
            'Sassuolo' => ['Consigli', 'Toljan', 'Chiriches', 'Ferrari', 'Kyriakopoulos', 'Lopez', 'Frattesi', 'Boga', 'Djuricic', 'Berardi', 'Raspadori'],
            'Torino' => ['Sirigu', 'Bremer', 'Nkoulou', 'Izzo', 'Vojvoda', 'Mandragora', 'Rincon', 'Linetty', 'Murru', 'Sanabria', 'Belotti'],
            'Udinese' => ['Musso', 'Becao', 'Nuytinck', 'Samir', 'Jens Stryger Larsen', 'Arslan', 'Walace', 'De Paul', 'Pereyra', 'Lasagna', 'Okaka'],
        ];

        
        echo '<div class="d-flex justify-content-center">' ;
            echo '<ul class="">';
            foreach ($formazioni_serie_a as $squadre => $formazione) {
                echo '<li>La formazione dell\' ' . $squadre . ' : ' . '';
                foreach ($formazione as $formazione) {
                    echo ' '. $formazione . ',' ;                
                }
                echo '</li>';
            }
            echo '</ul>';
        echo '</div>';

        //Crea l'array delle partite e delle squadre di serie A e della relativa formazione. Usa i cicli per stampare i dati

        $partite = [
            ['Lecce', 'Fiorentina'],
            ['Empoli', 'Genoa', 'Udinese', 'Monza', 'Frosinone', 'Milan', 'Bologna', 'Sassuolo'],
            ['Torino', 'Salernitana', 'Napoli', 'Verona', 'Atalanta', 'Lazio', 'Inter', 'Juve'],
            ['Empoli', 'Genoa', 'Udinese', 'Monza', 'Frosinone', 'Milan', 'Bologna', 'Sassuolo'],
            ['Torino', 'Salernitana', 'Napoli', 'Verona', 'Atalanta', 'Lazio', 'Inter', 'Juve'],
            ['Empoli', 'Genoa', 'Udinese', 'Monza', 'Frosinone', 'Milan', 'Bologna', 'Sassuolo'],
            ['Torino', 'Salernitana', 'Napoli', 'Verona', 'Atalanta', 'Lazio', 'Inter', 'Juve'],
        ] ;
        echo '<div>';
            foreach ($partite as $key => $squadre) {
                echo '<p class="d-flex align-items-center flex-nowrap flex-column">Giorno '. $key+1 .' giocheranno le squadre: '.' <span>';
                foreach ($squadre as $squadre) {
                    echo  $squadre . ' ' ;
                }
                echo '</span>';
                echo '</p>';
            }
        echo '</div>';

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>