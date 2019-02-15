

 var AllSongs = function(){
	this.init();
}



AllSongs.prototype.init = function(){
	var addSong = document.getElementsByClassName("addSong");
	for (var i = 0; i < addSong.length; i++){
	addSong[i].addEventListener('click', this.addSongToFav);
	}	
}

AllSongs.prototype.addSongToFav = function(){
	var idElt = this.getAttribute('id');
	console.log(idElt);
	$.ajax({
		type: "POST",
		url: "?action=addSong",
		 dataType: 'html',
		data : 'songId=' + idElt,
						
		success: function(){
			console.log ("AJAX DONE");
			return false;
	}
	});
} 

AllSongs.prototype.removeFavSong = function(){
	var idElt = this.getAttribute('id');
	console.log(idElt);
	$.ajax({
		type: "POST",
		url: "?action=removeSong",
		 dataType: 'html',
		data : 'songId=' + idElt,
						
		success: function(){
			console.log ("AJAX DONE");
			return false;
	}
	});
