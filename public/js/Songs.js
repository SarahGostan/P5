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
$('#songTerm').autocomplete({
	source: '?action=searchsong',
	minLength : 2,
	select: function(event, ui) {
		console.log(ui.item.id);
						document.getElementById('resultSongSearch').innerHTML = "<span class='songAddSearch'><h5>" + ui.item.value + "</h5><button class='removeSong' id='" + ui.item.id + "'></button><button class='addSong' id='" + ui.item.id + "'></button></span><audio src='public/songs/" + ui.item.desc + "' controls></audio><button>x</button>";
						},
});
}
