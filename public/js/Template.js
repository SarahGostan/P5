var Template = function(){
	this.init();
}

Template.prototype.init = function(){
var buttons = document.querySelectorAll('.gestionButton')
  for (var i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', this.showHideContent);
  }
}



Template.prototype.showHideContent = function(){
  var box = this.getAttribute('id');
  var data = this.dataset.form;
  var form = document.getElementById(data);
  var hideShow = document.getElementById(data).className;
  if(hideShow === 'hide'){
  form.style.display = 'block';
  form.classList.remove('hide');
  form.setAttribute('class', 'show');
}
else{
  form.style.display = 'none';
  form.classList.remove('show');
  form.setAttribute('class', 'hide');
}
}
