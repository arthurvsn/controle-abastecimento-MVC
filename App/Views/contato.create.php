<form action="/contato" name="envia" id="envia" method="post">
		<ul>
			<li>
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome">
			</li>
			<li>
				<label for="email">Email</label>
				<input type="email" name="email" id="email">
			</li>
			<li>
				<label for="telefone">Telefone</label>
				<input type="tel" name="telefone" id="telefone">
			</li>
			<li>
				<label for="assunto">Assunto</label>
				<input type="text" name="assunto" id="assunto">
			</li>
			<li>
				<label for="mensagem">Mensagem</label>
				<textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
			</li>
			<li>
				<input type="submit" name="enviar" id="enviar" value="Enviar">
			</li>
		</ul>
</form>