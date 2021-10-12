<!DOCTYPE html>

<?php  
 $text = "L’AQUILA – I due noti imprenditori del capoluogo regionale Ennio Di Nardo e Stefano Volpe gestiranno per i prossimi 6 anni l’ostello Campo Imperatore, dotato di 12 stanze, oltre a un ristorante e un bar, nel versante aquilano del Gran Sasso d’Italia: alle due società che fanno riferimento ai due costruttori, Fratelli Di Nardo e Svedil, il Comune dell’Aquila, proprietario della struttura, ha assegnato la concessione in seguito ai bandi pubblicati dal Centro turistico del Gran Sasso, società partecipata dell’amministrazione comunale che gestisce la stazione invernale di Campo Imperatore.Sono andate invece deserte le gare relative al rifugio Le Fontari e dell’hotel Cristallo, in località Fonte Cerreto, alla base della funivia. l Comune ha ufficialmente destinato la struttura ai due stimati imprenditori impegnati nella ricostruzione post terremoto ma anche in commesse  fuori dal territorio cittadino e regionale, proprio nel giorno in cui è stato presentato il progetto di recupero dello storico albergo Campo Imperatore, con 3,8 milioni di euro pubblici, i cui lavori cominceranno nella prossima primavera. L’Ostello è stato gestito negli ultimi quattro anni dai fratelli Mancini che hanno lasciato prima del termine. Molto motivati i due nuovi “proprietari”: “abbiamo accettato questa autentica sfida che cade in un momento molto delicato socialmente ed economicamente vista la pandemia ancora in atto, perché vogliamo bene al nostro territorio e siamo coscienti che tutti dobbiamo fare qualcosa per la ripresa e lo sviluppo  – spiegano Di Nardo, che sarà sostenuto anche dai fratelli Armando e Mauro, e Volpe -. Daremo subito avvio ai lavori per essere pronti all’inizio della stagione invernale con la apertura degli impianti sciistici. Crediamo fermamente nel rilancio turistico del Gran Sasso e speriamo che la nostra iniziativa possa essere di stimolo per altri imprenditori locali al fine di contribuire alla rinascita di strutture turistiche e ricettive”.A tale proposito e in riferimento alle due gare andate deserte ecco il commento degli assessori al Turismo Fabrizia Aquilio e alle Partecipate, Fausta Bergamotto, e dell’amministratore unico del Centro Turistico del Gran Sasso, Dino Pignatelli: “Nonostante la pandemia che ha fortemente contratto le attività delle stazioni turistiche montane, l’afflusso dei visitatori nel periodo estivo è stato elevato e ci aspettiamo che accada altrettanto in quello invernale, con l’auspicabile riapertura degli impianti di risalita. Per questo motivo per gli operatori economici del settore la possibilità di ottenere in concessione queste strutture ricettive è un’occasione importante tanto per la loro attività, quanto per fornire un’offerta ancora più adeguata all’utenza”.";
 $textCriptato = str_replace($_GET["parolaCensurata"], "***", $text);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<h1>OSTELLO CAMPO IMPERATORE, NUOVA GESTIONE: “CREDIAMO NEL RILANCIO TURISTICO DEL GRAN SASSO”</h1>
<p>  </p>

<p> 
    <?php echo $text . "Numero di caratteri: " . strlen($text) ?>
</p>
<p> 
    Numero di caratteri:  <?php echo strlen($text) ?> ;
</p>
<p> <?php echo $textCriptato ?> </p>
<p>
    Numeri di caratteri: <?php echo strlen($textCriptato) ?> ;
</p>
</body>
</html>