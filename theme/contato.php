<?php $v->layout("_theme"); ?>

<div class="contact">
	<h2>Fale conosco!</h2>
	<p>ahsuiahsiuhauihauihiaushuiahsuiahsuiahsuihas</p>

	<form action="<?php echo url('contact') ?>" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Seu Nome:">
		<input type="email" name="email" placeholder="Seu E-mail:">
		<textarea name="message" rows="3"></textarea>
		<button>Enviar Mensagem!</button>
	</form>
</div>

<?php $v->start("scripts"); ?>
<script>
	$(function(){
		$("button").after('<button type="reset">Limpar</button>');
	})
</script>
<?php $v->end(); ?>