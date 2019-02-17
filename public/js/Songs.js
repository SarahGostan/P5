

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
		url: "?action=accountAddSong",
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
		url: "?action=accountRemoveSong",
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



