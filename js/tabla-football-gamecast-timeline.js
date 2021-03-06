$('#btn-see').click(function(){
    $( ".fgs-commentary" ).toggleClass( 'hidden');
    $( ".fgs-timeline" ).toggleClass( 'hidden');
    $(this).text(function(i, text){
        return text === "Ver Full Comentarios" ? "Ver Timeline" : "Ver Full Comentarios";
    })
})