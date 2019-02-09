
/*  var AllSongs = function(){
	this.init();
}

AllSongs.prototype.addSongToFav = function(){
	console.log("jusque là, tout va bien");
} 

AllSongs.prototype.init = function(){
	document.getElementById("tarace").addEventListener('click', this.addSongToFav);	
} */


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
	var id = $("#id").val();
	$.ajax({
		type: "POST",
		url: "?action=addSong",
		 data: {
			 fonction: 'addSong',
                params: {
					param1: '6',
					param2: '4'
					},
               },
						
		success: function(){
			console.log ("AJAX DONE");
	}
	});
} 
/* 	

AllSongs.prototype.addSongToFav = function(){
	console.log("jusque là, tout va bien");
	var id = $("#id").val();
	$.ajax({
		type: "POST",
		url: "controller/frontend.php",
		success: function(){
			console.log ("AJAX DONE");
	}
	});
} 
 */

