$(document).ready(function(){

	// On ajoute la propriété spéciale dataTransfer à nos events jQuery
    $.event.props.push("dataTransfer");

    // On pose les évènements nécessaires au drag'n'drop
    $('#output').bind({
        "dragenter dragexit dragover" : do_nothing,
        drop : drop
    });

});

// Fonction stoppant toute évènement natif et leur propagation
function do_nothing(evt){
    evt.stopPropagation();
    evt.preventDefault();
}

function drop(evt){
    do_nothing(evt);
    var files = evt.dataTransfer.files;
    // On vérifie que des fichiers ont bien été déposés
    if(files.length>0){
        for(var i in files){
            // Si c'est bien un fichier
            if(files[i].size!=undefined) {

                var pin=files[i];

                // On construit notre objet FormData
                var fd=new FormData;
                fd.append('pin',pin);

                // Requete ajax pour envoyer le fichier
          
                $.ajax({
                    url:'../../../pinshot/ajax/upload',
                    type: 'POST',
                    data: fd,
                    processData:false,
                    contentType:false,
                });

                // On ajoute notre fichier à la liste
                $('#output-listing').append('<div class="panel callout">'+files[i].name+'</div>');

            }
        }
    }

}