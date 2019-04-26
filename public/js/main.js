
var loaded = 0;
document.addEventListener('DOMContentLoaded', function(){
	if (loaded == 0){
	if(typeof Ingame != 'undefined'){
	var ingame = new Ingame();
	}
	if(typeof Manage != 'undefined'){
	var ingame = new Manage();
	}
loaded = 1;
return loaded;
}
});
