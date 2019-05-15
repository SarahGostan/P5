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

var song = $('#songSearch').autocomplete({
	source: '?action=searchsong',
	 minLength : 3,
	 select : function(event, ui){
		var result = ui.item.value;
		console.log( ui.item.value ); // lance une alerte indiquant la valeur de la proposition
		return result;
	},
	select : function(event, ui){ // lors de la sélection d'une proposition
        $('#resultSongSearch').html( ui.item.desc ); // on ajoute la description de l'objet dans un bloc
				console.log(ui.item.desc);
    }
});

}
