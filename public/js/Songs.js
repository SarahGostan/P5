var AllSongs = function(){
	this.init();
}

AllSongs.prototype.init = function(){
	var that = this;
	this.autoSearch(that);
	var addSong = document.querySelectorAll(".addSong, .removeSong");
	for (var i = 0; i < addSong.length; i++){
	addSong[i].addEventListener('click', this.addRemoveFav);
	}

}

AllSongs.prototype.addRemoveFav = function(){
	var idElt = this.getAttribute('id');
	idElt = idElt.replace('searchResult', '');
	var addOrRemove = this.getAttribute('class');
	if(addOrRemove == "addSong"){
	$.ajax({
		type: "POST",
		url: "?action=accountAddSong",
		 dataType: 'html',
		data : 'songId=' + idElt,
		success: function(){
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

AllSongs.prototype.autoSearch = function(that){

	$('#songTerm').autocomplete({
		source: '?action=searchsong',
		minLength : 2,
		select: function(event, ui)
		{
			if (!$('#showSongResult' + ui.item.id).length){
							$('#resultSongSearch').append("<div id='showSongResult" + ui.item.id + "'><h5>"
							 + ui.item.value + "<div class='resultSongSearch'></h5></button><audio src='public/songs/" + ui.item.desc
								+ "' controls></audio><button class='close' aria-label='Close' id='close" + ui.item.id
								+ "'><span aria-hidden='true'>&times;</span></button></div>");
							$('#close' + ui.item.id).click(function(){
							$('#showSongResult' + ui.item.id).hide();
							});


														$.ajax({
															type: "GET",
															url: "?action=songFavStatut",
															dataType: 'html',
															data : 'songId=' + ui.item.id,

															success: function(code_html){

															if(code_html == 1){
																$('#showSongResult' + ui.item.id).append("<button class='removeSong' id='searchResult" + ui.item.id + "'>");
															//	ui.item.classList.add("removeSong");
															}
															else{
																$('#showSongResult' + ui.item.id).append("<button class='addSong' id='searchResult" + ui.item.id + "'>");
															}


														},
															complete: function(){
																document.querySelector('#searchResult' + ui.item.id).addEventListener('click', that.addRemoveFav);

															}
														});

				}
				else
				{
					$('#showSongResult' + ui.item.id).show();
				}

				$('#resultSongSearch').show();

				var addSong = document.querySelectorAll(".searchResult");
				for (var i = 0; i < addSong.length; i++){
				addSong[i].addEventListener('click', this.addRemoveFav);
				}
		}
	});
}



/*	select: function(event, ui) {
		if (!$('#showSongResult' + ui.item.id).length){
						$('#resultSongSearch').append("<div id='showSongResult" + ui.item.id + "'><h5>"
						 + ui.item.value + "<div class='resultSongSearch'></h5></button><audio src='public/songs/" + ui.item.desc
							+ "' controls></audio><button class='close' aria-label='Close' id='close" + ui.item.id
							+ "'><span aria-hidden='true'>&times;</span></button></div>");
						$('#close' + ui.item.id).click(function(){
						$('#showSongResult' + ui.item.id).hide();
						});


													$.ajax({
														type: "GET",
														url: "?action=songFavStatut",
														dataType: 'html',
														data : 'songId=' + ui.item.id,

														success: function(code_html){

														if(code_html == 1){
							console.log('1');
															$('#showSongResult' + ui.item.id).append("<button class='removeSong' id='" + ui.item.id + "'>");
														}
														else{
															console.log('0');
															$('#showSongResult' + ui.item.id).append("<button class='addSong' id='" + ui.item.id + "'>");

															}
														}
													});
																$.ajax({
																	type: "POST",
																	url: "?action=accountAddSong",
																	 dataType: 'html',
																	data : 'songId=' + idElt,
																	success: function(){
																		this.classList.remove("addSong");
																		this.classList.add("removeSong");_
																	}

																});

															});
			}
			else{
				$('#showSongResult' + ui.item.id).show();
			}
				$('#resultSongSearch').show();




			}*/
