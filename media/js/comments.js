function comment(pin, idusr, content){
		var userID = idusr;
		var pinID = pin;
		var content = $("textarea#content" + pin + idusr).val();
		var dataString = 'userID='+ userID + '&content=' + content + '&pinID=' + pinID;
		if(userID==''){
		alert('Erreur');
		}
		else{
			$("#flash").show();
			$("#flash").fadeIn(400).html('<img src="../../../pinshot/media/img/loader.gif" /> Chargement commentaires...');
			$.ajax({
				type: "POST",
				url: "../../../pinshot/ajax/comments",
				data: dataString,
				cache: false,
				success: function(html){
				}
			});
		}
	}

function show_coms(pin){
			$("#flash" + pin).show();
			$("#flash" + pin).fadeIn(400).html('<img src="../../../pinshot/media/img/loader.gif" /> Chargement commentaires...');
			$.ajax({
				type: "POST",
				url: "../../../pinshot/ajax/showcom",
				data: pin,
				datatype: 'json',
				cache: false,
				success: function(result){
					$.getJSON(this.href, function(result){
					$("ul#update").append('content');
					$("ul#update li:last").fadeIn("slow");
						});
				}
			});
}