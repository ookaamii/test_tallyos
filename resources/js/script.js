$(document).ready(function () {

    var url = window.location.href;
    var update = "http://localhost/test_tallyos/update.php";
    update = url.match(update);

    if(url === "http://localhost/test_tallyos/ruches.php" || update) {
        $('#ruches').css('background-color', 'black');
        $('#ruches').css('color', 'white');
    }
    if(url === "http://localhost/test_tallyos/informations.php") {
        $('#infos').css('background-color', 'black');
        $('#infos').css('color', 'white');
    }
    if(url === "http://localhost/test_tallyos/index.php") {
        $('#accueil').css('background-color', 'black');
        $('#accueil').css('color', 'white');
    }

    $('.add-ruche').click(function () {
        $('.form-add').toggle();
    });

    $('.table-ruches').DataTable({
        "language": {
            "sEmptyTable":     "Aucune donnée disponible dans le tableau",
            "sInfo":           "Ligne _START_ à _END_ sur _TOTAL_",
            "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
            "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "_MENU_ lignes par page",
            "sLoadingRecords": "Chargement...",
            "sProcessing":     "Traitement...",
            "sSearch":         "Rechercher :",
            "sZeroRecords":    "Aucun élément correspondant trouvé",
            "oPaginate": {
                "sFirst":    "Premier",
                "sLast":     "Dernier",
                "sNext":     ">",
                "sPrevious": "<"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
            },
            "select": {
                "rows": {
                    "_": "%d lignes sélectionnées",
                    "0": "Aucune ligne sélectionnée",
                    "1": "1 ligne sélectionnée"
                }
            }
        },
        "pagingType": "simple_numbers",
        "dom": '<"top"f>rt<"bottom"ilp><"clear">',

    });
    console.log('coucou');
})