var Ingame = function(){
	this.init();
}

Ingame.prototype.init = function(){
	document.getElementById("rollDices").addEventListener('click', this.rollDices.bind(this));	
}



Ingame.prototype.rollDices = function(){	
	var diceNumber = document.getElementById("diceNumber").value;
	var diceFaces = document.getElementById("diceFaces").value;
	var diceResults = document.getElementById("diceResult");
	var diceElement = document.createElement("div");
	var diceTotal = document.createElement("div");
	var totalDices = 0;
	for (i = 0; i < diceNumber; i++)
	{
		var diceAlone = document.createElement("span");
		var oneDiceResult = this.getRandomDices(1, diceFaces)
		diceAlone.appendChild(document.createTextNode((oneDiceResult)));
		diceElement.appendChild(diceAlone);
		document.getElementById("last").id = "";
		diceElement.id = "last";
		diceResults.appendChild(diceElement);
		var totalDices = oneDiceResult + totalDices;
	}
	var diceTotal = document.createElement("div");
	diceTotal.setAttribute("id", "total");
	diceTotal.appendChild(document.createTextNode('Total :' + totalDices));
	diceElement.appendChild(diceTotal);
	diceResults.scrollTop = diceResults.scrollHeight;
}

Ingame.prototype.getRandomDices = function(min, max){
	min = Math.ceil(min);
	max = Math.floor(max);
	var result = Math.floor(Math.random() * (max - min +1)) + min;
	if(isNaN(result)){
		alert ('Echec du roll');
		exit();
	}
	else{
	return result;
	}
}

Ingame.prototype.getTotal = function(){
	for (i = 0; i < diceAlone; i++)
	{
		
	}
	
	return total;
}