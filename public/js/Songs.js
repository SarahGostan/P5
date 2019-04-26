var AllSongs = function(){
	this.init();
}

AllSongs.prototype.init = function(){
	this.autoSearch();

	var addSong = document.querySelectorAll(".addSong, .removeSong");
	for (var i = 0; i < addSong.length; i++){
	addSong[i].addEventListener('click', this.addRemoveFav);
	}

}

AllSongs.prototype.addRemoveFav = function(){
	var idElt = this.getAttribute('id');
	var addOrRemove = this.getAttribute('class');
	if(addOrRemove == "addSong"){
	$.ajax({
		type: "POST",
		url: "?action=accountAddSong",
		 dataType: 'html',
		data : 'songId=' + idElt,

			success: function(){
				return true;
		}

	});
	if (success= true){

	this.classList.remove("addSong");
	this.classList.add("removeSong");
	}

	}
	else if(addOrRemove == "removeSong"){
		$.ajax({
			type: "POST",
			url: "?action=accountRemoveSong",
			 dataType: 'html',
			data : 'songId=' + idElt,

			success: function(){
				return true;
			}

		});
		if (success= true){

		this.classList.remove("removeSong");
		this.classList.add("addSong");
		}
	}


}

AllSongs.prototype.autoSearch = function(){
	console.log("blah");
	var liste = [
		"Corbeau",
		"Trompette",
		"Tasoeur"
	];
	$('#songSearch').keyup(function(){
		console.log("haha");
		var recherche = $(this).val();
		console.log(recherche);
		var data = 'wordkey=' + recherche;
		if(recherche.length > 2){
			$.ajax({
				type : "GET",
				url: "?action=songSearch",
				data : data,
				success: function(server_response){
					$("#result").html(server_response).show();
					return true;
					console.log("ok");
				}

		});

}
});

}
