

 var AllSongs = function(){
	this.init();
}

AllSongs.prototype.init = function(){
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
		url: "?action=addSong",
		 dataType: 'html',
		data : 'songId=' + idElt,
			
		success: function(){
	
	/*	 */		
			return true;	
	}
	});
	if (success= true){
	this.textContent = 'Retirer des favoris'; 
	this.classList.remove("addSong");
	this.classList.add("removeSong");
	}
	
	}
	else if(addOrRemove == "removeSong"){
		$.ajax({
		type: "POST",
		url: "?action=removeSong",
		 dataType: 'html',
		data : 'songId=' + idElt,
						
		success: function(){
			return true;
			
	}
	});
	if (success= true){
	this.textContent = 'Ajouter aux favoris'; 
	this.classList.remove("removeSong");
	this.classList.add("addSong");
	}
	}
	
	
	
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
			
			return true;
			
	}
	});
	if (success = true){
	this.textContent = 'Ajouter aux favoris';
	this.classList.remove("removeSong");
	this.classList.add("addSong");
	this.addEventListener('click', this.addSongToFav);
	}
}



