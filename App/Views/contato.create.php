<style type="text/css">
body{
  font-size:12px;
  font-family:Verdana, Geneva, sans-serif;
}
#contato_form{
  width:500px;
  min-height:175px;
  color:#999;
  margin:auto;
}
.asteristico{
  color:#F00;
}
</style>

    <div id="contato_form">
      <form action="/contato" name="form_contato" method="post" >
      <p class="titulo">Formulário <small class="asteristico">*Campos Obrigatorios</small></p>
        <table align="center">
          <tr>
            <td>Nome:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="nome" maxlength="40" />
            </td>
          </tr>
          <tr>
            <td>E-mail:<sup class="asteristico">*</sup></td>
            <td>
              <input type="email" name="email" maxlength="30" />
            </td>
          </tr>
          <tr>
            <td>Telefone:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="telefone" maxlength="14" />
            </td>
          </tr>
          <tr>
            <td>Opções:<sup class="asteristico">*</sup></td>
            <td>
              <select name="escolhas" class="campo_input">
                <option value="Opção 1">Opção 1</option>
                <option value="Opção 2">Opção 2</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Mensagem:<sup class="asteristico">*</sup></td>
            <td>
              <textarea name="msg" cols="16" rows="5"></textarea>
            </td>
          </tr>
          <tr align="right";>
            <td colspan="2">
              <input type="reset" class="campo_submit" value="Limpar" />
              <input type="submit" class="campo_submit" value="Enviar" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="right"><small class="asteristico">* Campos obrigatorios</small></td>
          </tr>
        </table>
      </form>
    </div>

<!--
<form action="/contato" name="envia" id="envia" method="post">
		<ul>
			<li>
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome">
			</li><br>
			<li>
				<label for="email">Email</label>
				<input type="email" name="email" id="email">
			</li><br>
			<li>
				<label for="telefone">Telefone</label>
				<input type="tel" name="telefone" id="telefone">
			</li><br>
			<li>
				<label for="assunto">Assunto</label>
				<input type="text" name="assunto" id="assunto">
			</li><br>
			<li>
				<label for="mensagem">Mensagem</label>
				<textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
			</li><br>
			<li>
				<input type="submit" name="enviar" id="enviar" value="Enviar">
			</li><br>
		</ul>
</form>-->