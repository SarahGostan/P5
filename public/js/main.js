
var loaded = 0;
document.addEventListener('DOMContentLoaded', function(){
	if (loaded == 0){
	if(typeof Ingame != 'undefined'){
	var ingame = new Ingame();
	}
	if(typeof AllSongs != 'undefined'){
	var allSongs = new AllSongs();
}
if(typeof Manage != 'undefined'){
var manage = new Manage();
}
if(typeof Template != 'undefined'){
var manage = new Template();
}
loaded = 1;
return loaded;
}
});
