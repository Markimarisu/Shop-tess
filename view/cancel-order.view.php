<?php require('../view/partial/_header.view.php'); ?>

<main>
	
	<h1>Annuler une commande</h1>

	<p><?php echo $message; ?></p>

	<?php if ($orderByUser) {?>
		<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
		<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
		<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>


		<form method="post">
			<button type="submit">Annuler cette commande</button>
		</form>

	<?php } else { ?>
		<p>Vous n'avez pas de commande à annuler</p>
	<?php } ?>
	

</main>

</body>
</html>