const title 	= document.querySelector('title').innerHTML = 'DevPlay';
const form 		= document.getElementById('formulario');
const name 		= document.getElementById('nome');
const userNames = document.querySelector('input[name="nome"]')
const lastName 	= document.getElementById('sobrenome');
const date 		= document.getElementById('nascimento');
const email 	= document.getElementById('email');
var small 		= document.getElementById('smallNome');
var smallSobrenome = document.querySelector('div[for = "Looks"]');
	document.getElementById('button').addEventListener("click", function(event){
		event.preventDefault()
		validarFormulario();
	});
	function validarFormulario() {
		if(name.value == '') {
			alert('Campo nome não pode ser vazio ');
			small.innerHTML = 'Preencha o campo nome';
			name.focus();
		} else if(lastName.value == '') {
			alert('Sobrenome não pode ser vazio');
			smallSobrenome.innerHTML = smallSobrenome
			lastName.focus();
		} else if(date.value 	== '') {
			alert('Data de nascimento não pode ser vazio');
		} else if(email.value 	== '') {
			alert('Email não pode ser vazio');
		} else {
			alert('Formulário enviado com sucesso');
		}
	return true;
 }
	
