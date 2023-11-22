function lancerDe() {
    var resultat = Math.floor(Math.random() * 6) + 1;
    var diceElement = $('#dice');
    diceElement.show();

    // Animation : changer l'image du dé rapidement plusieurs fois
    var times = 10; // Nombre de changements d'images avant d'afficher le résultat
    var i = 0;
    var interval = setInterval(function() {
        i++;
        var randomFace = Math.floor(Math.random() * 6) + 1;
        diceElement.attr('src', '../images/die' + randomFace + '.png');

        if (i >= times) {
            clearInterval(interval);
            diceElement.attr('src', '../images/die' + resultat + '.png'); // Afficher le résultat final
            $('#resultatDe').html('Résultat du dé : ' + resultat);
        }
    }, 100); // Durée entre chaque changement d'image
}

$('#lancerDe').click(lancerDe);
