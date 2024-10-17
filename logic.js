var n = document.getElementById('lengthArr').innerHTML;

for(let i=1; i<=n; i++){
	$("#_" + i).click(function(){

		window.location.href = "http://localhost:8000/song.php?id=" + i; 

	});
}