
function addContact(){
	const divContact = document.getElementById('contact');
	let index = divContact.getAttribute('data-index');
	let content = divContact.getAttribute('data-content');

  	content = content.replace(/index/gi, index);
	divContact.insertAdjacentHTML('beforeend', content);
	divContact.setAttribute('data-index', parseInt(index) + 1);
}

function addAddress(){
	const divAddress = document.getElementById('address');
	let index = divAddress.getAttribute('data-index');
	let content = divAddress.getAttribute('data-content');

  	content = content.replace(/index/gi, index);
	divAddress.insertAdjacentHTML('beforeend', content);
	divAddress.setAttribute('data-index', parseInt(index) + 1);
}
