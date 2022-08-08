<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Les semeurs du Royaume</title>
	<link rel="stylesheet" type="text/css" href="don.css">
</head>
<body>
	<?php include("header.php"); ?>
	<section>
		<div>
			<h1>Faire un don</h1>
		</div>
		<div>
			<p>Et n'oubliez pas la bienfaisance et la libéralité, car c'est à de tels sacrifices que Dieu prend plaisir</p>
		</div>
	</section>
	<section>
		<div class="cont">
			<div class="cont-onglets">
				<div class="onglets active" data-anim="1">
					Faire un don
				</div>
				<div class="onglets" data-anim="2">
					Historique de mes dons
				</div>
			</div>

			<div class="contenu activeContenu" data-anim="1">

				<p>
					Vous pouvez aussi envoyer votre don par Orange Money
				</p>
				<img src="images/Orange-money-number.png" >
			</div>

			<div class="contenu activeContenu" data-anim="2">				 
				<div>  
				<table style="border-collapse: collapse;">  
				  <tr><th>#</th><th>Date</th><th>Montant</th><th>Facture</th></tr>  
				  <tr><td>1</td><td>0/04/2022</td><td>20 000 XOF</td><td>Télécharger</td></tr>  
				</table>  
				</div>  
			</div>
		</div>
			 
	</section>
</body>
<script type="text/javascript">
	const onglets = document.querySelectorAll('.onglets');
	const contenu = document.querySelectorAll('.contenu');
	let index = 0;

	onglets.forEach(onglet => {
		onglet.addEventListener('click', () => {
			if (onglet.classList.contains('active')){
				return; 	
			}else{
				onglet.classList.add('active');
			}

			index = onglet.getAttribute('data-anim');
			console.log(index)

			for(i=0 ; i<onglets.length; i++){
				if(onglets[i].getAttribute('data-anim')!= index){
					onglets[i].classList.remove('active')
				}
			}
			for(j=0 ; j<contenu.length; j++){
				if (contenu[j].getAttribute('data-anim') == index) {
					contenu[j].classList.add('activeContenu');
				} else {
					contenu[j].classList.remove('activeContenu');
				}
			}
		})
	})
</script>
</html>