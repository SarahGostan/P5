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
/*	console.log("blah");
	var liste = [
	"Abeilles",
	"Trompette",
	"Test son",
	"Cheval",
	"Toto"
];

$('#songSearch').autocomplete({
	source: liste,
	minLength: 3
});*/



	var liste = [
		{value : "Abeilles", label : "Abeilles", desc : "Bzz bzz"},
		{value: "Rêve", label : "Reve", desc: "Le marchand de sable est passé"},
		{value: "Reveillon", label: "Reveillon", desc: "Soirée de fête"}
];

$('#songSearch').autocomplete({
	source: function(){

		$.ajax({
			type: "GET",
			url: "?action=getSongList",
			data: 'songSearch =' + term,
			dataType: 'html',

			success: function(){

			}

		});

	},
	position : {
			 my : 'left top',
			 at : 'left bottom'
	 },
	 minLength : 3,

	select: function(event, ui){
		$('#result').val(ui.item.desc);
	}
});

}
