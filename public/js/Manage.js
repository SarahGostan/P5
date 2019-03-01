var Manage = function(){
	this.init();
}

Manage.prototype.init = function(){
	var addSong = document.querySelectorAll('.addSongToGame, .removeSongFromGame');
	for (var i = 0; i < addSong.length; i++){
	addSong[i].addEventListener('click', this.addRemoveGame);
	}
}

Manage.prototype.addRemoveGame = function(){
	var idElt = this.getAttribute('id');
	var game = this.getAttribute('name');
	var addOrRemove = this.getAttribute('class');

	if(addOrRemove == "addSongToGame"){
	$.ajax({
		type: "POST",
		url: "?action=accountAddSongToGame",
		dataType: 'html',
		data : 'songId=' + idElt + '&gameId=' + game,
		success: function(){
			return true;
		}
	});
		if (success= true){
		console.log("ajouté");
		}

	}

	else if(addOrRemove == "removeSongFromGame"){
		$.ajax({
		type: "POST",
		url: "?action=accountRemoveSongFromGame",
		 dataType: 'html',
		data : 'songId=' + idElt + '&gameId=' + game,
		success: function(){
			return true;

		}
	});

		if (success= true){

			var song = document.getElementById('song' + idElt);
				song.style.display = 'none';
				console.log(song);

		}
	}

}
