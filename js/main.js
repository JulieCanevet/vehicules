$(".delete").click(function(){
	alert('etes vous sur ?');
});

<form action="supprimer.php?code=$line['code'] " method="post">
<input name="supprimer" type="submit" onclick="if(!confirm('Voulez-vous Supprimer')) return false;" value="Supprimer" />
</form>