document.getElementById('add').addEventListener('click', function(){
	var input = document.getElementById('input')
	var content = document.getElementById('content')
	content.innerHTML += `<tr id="1">
				<td id="1"></td>
				<td><button number="1">Xoa</button></td>
			</tr>`
	input.value =''
	i++;
})

function funDelete(id){
	document.getElementById(id).remove()
}