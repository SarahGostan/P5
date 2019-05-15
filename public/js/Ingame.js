var Ingame = function(){
	this.init();
}

Ingame.prototype.init = function(){
	var content = this.quillStarter();
	document.getElementById('rollDices').addEventListener('click', this.rollDices.bind(this));
	document.getElementById('switchEdit').addEventListener('click', this.switchEdit.bind(this));
	var notes = document.getElementsByClassName("editNotes");

		for (var i = 0; i < notes.length; i++){
				notes[i].addEventListener('click', this.editNotes.bind(this));
			}

}

Ingame.prototype.quillStarter = function(){

var options = {
toolbar: '#toolbar',
theme: 'snow'
};
var container = document.getElementById("notesContentEdit");

if(document.querySelector('.ql-toolbar') !== null){
var quill =	document.querySelector('.ql-toolbar');
quill.parentNode.removeChild(quill);
}

var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],


  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],

  ['clean']                                         // remove formatting button
];


	var quill = new Quill(container, {
  modules: {
    toolbar: toolbarOptions
  },
  theme: 'snow'
});

  var contents = quill.container.firstChild.innerHTML;
	var contentHtml = quill.getContents();

  var html = JSON.stringify(contentHtml, null, 2);
	console.log(html);
	var html2 = JSON.stringify(contentHtml);
	console.log(html2);
	var tst =  quill.container.firstChild.innerHTML;
//  container.innerHTML = html;
//  hljs.highlightBlock(container);
	return contents;

}

Ingame.prototype.getText = function(){
	var container = document.getElementById("notesContentEdit");
	var quill = new Quill(container);
  var contents = quill.container.firstChild.innerHTML;
	return contents;
}

Ingame.prototype.switchEdit = function(){
	this.quillStarter();
	document.getElementById('fieldNotesEdit').style.display = 'block';
	document.getElementById('fieldNotes').style.display = 'none';
}

Ingame.prototype.switchReadOnly = function(content){
	document.getElementById('fieldNotesEdit').style.display = 'none';
	document.getElementById('fieldNotes').style.display = 'block';
	document.getElementById('notesContent').innerHTML = content;
}


Ingame.prototype.editNotes = function(content){

var fieldNotes = document.getElementById('fieldNotes');
var content = this.getText();
	var id = fieldNotes.dataset.id;
	var title = document.getElementById("notesTitleEdit").value;
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
		console.log('ajax ok');
		this.switchReadOnly(content);
		}
		console.log(content);
		//var delta = quill.getContents();
	//	console.log(delta);

	}










/********************************************** FONCTIONS A IMPLANTER PAR LA SUITE **********************************************/



	/*Ingame.prototype.newNote = function(){
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

	}*/




/********************************************** ROLL DE DES **********************************************/





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
