var Ingame = function(){
	this.init();
}

Ingame.prototype.init = function(){
	document.getElementById('rollDices').addEventListener('click', this.rollDices.bind(this));
	document.getElementById('switchEdit').addEventListener('click', this.switchEdit);
	var notes = document.getElementsByClassName("editNotes");

		for (var i = 0; i < notes.length; i++){
				notes[i].addEventListener('click', this.editNotes);
			}


}

Ingame.prototype.switchEdit = function(){
	console.log('here we go');
	$title = document.getElementById('notesTitle').textContent;
	$content = document.getElementById('notesContent').innerHTML;
		$(notesContent).replaceWith('<textarea id="notesContent">' + $content + '</textarea>');
		$(notesTitle).replaceWith('<input id="notesTitle" value=' + $title + '>');
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

Ingame.prototype.newNote = function(){
	var formulaire = document.forms['notesGameEdit'];
	var firstField = formulaire.firstChild;
//	var formulaire = document.getElementById['notesField'];
	var fieldset = document.createElement ("fieldset");
	var legend = document.createElement ("input");
	var button = document.createElement("input");
	button.type = "button";
	button.value = "Sauvegarder";
	var text = document.createElement("textarea");
	text.className = "content";
	text.name = "content";
	var br = document.createElement("br");
	button.addEventListener('click', this.saveNewNote)
	fieldset.appendChild(legend);
	fieldset.appendChild(br);
	fieldset.appendChild(text);
	fieldset.appendChild(button);
	formulaire.insertBefore(fieldset, firstField);
}

Ingame.prototype.saveNewNote = function(){
	var formulaire = document.forms['notesGameEdit'];
	var firstField = formulaire.firstChild;
	var content = firstField.elements["content"].value;
	var title = firstField.elements["title"].value;
	$.ajax({
		type: "POST",
		url: "?action=addnewnote",
		dataType: 'html',
		dataType: 'html',
		success: function(){
			return true;
		}
			});
	console.log("Sauvegardé");
}

Ingame.prototype.editNotes = function(){

	var fieldNotes = document.getElementById('fieldNotes');
//	var dataNumber = formulaire.data.number;
//	var title = fieldNotes.elements["legend"].value;
	var content = document.getElementById('notesContent').value;
	var id = fieldNotes.dataset.id;
	var title = document.getElementById("notesTitle").value;
	console.log(title);
	console.log(content);
	$.ajax({
		type: "POST",
		url: "?action=notesEdit",
		dataType: 'html',
		dataType: 'html',
		data : 'title=' + title + '&content=' + content + '&id=' + id,
		success: function(){
			return true;
		}
	});
		if (success= true){
		console.log('ok');
		}

	}
