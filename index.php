<?php  ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
    <!-- BOOTSTRAP v5.2 -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
BONUS 1 : Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
BONUS 2: Milestone 4
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->
<body class="bg-dark">
    <div class="my-container w-75 m-auto text-center text-white">
        <h1>Strong Password Generator</h1>
        <h2>Genera una Password sicura</h2>
        <form action="./server.php" method="get" class="w-100 d-flex flex-column">
            <div class="length-container">
                <label for="pwlength">Lunghezza Password:</label>
                <input type="number" name="pwlength">
            </div>
            <div class="filter-container">
                <div class="d-flex justify-content-between">
                    <label for="repetition">Consenti ripetizioni di uno o più caratteri:</label>
                    <div>
                        <input type="radio" name="repetition" id="repetitionYes" value="Yes">
                        <span>Yes</span>
                    
                        <input type="radio" name="repetition" id="repetitionNo" value="No">
                        <span>No</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <label>Filtra per categorie: </label>
                    <div class="d-flex flex-column">
                        <div>
                            <input type="checkbox" name="symbols" id="symbols" checked>
                            <span>Simboli</span>
                        </div>
                    
                        <div>
                            <input type="checkbox" name="numbers" id="numbers" checked>
                            <span>Numeri</span>
                        </div>
                    
                        <div>
                            <input type="checkbox" name="letters" id="letters" checked>
                            <span>Lettere</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>
        </form>
    </div>
    
</body>
</html>