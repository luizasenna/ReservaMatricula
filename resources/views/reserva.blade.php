
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-top:50px;">
  <h3 style="text-align:center;">Reserva de Matrículas</h3>
  <hr/>
</div>

<div class="container">
  <div class="row">
      <form class="col-12 form-horizontal" style="padding:80px;">
        <div class="form-group row">
            <div class="col-12">
                  <input id="nome" name="nome" placeholder="Nome do Aluno(a)" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2">
              Data Nascimento
            </label>
            <div class="col-3 ">
                  <input id="nascimento" name="nascimento" placeholder="Data de Nascimento" type="date" class="form-control" required="required">
            </div>
            <label class="col-2 text-right">
                Natural de
            </label>
            <div class="col-3">
                  <input id="naturalidadeCidade" name="naturalidadeCidade" placeholder="Cidade Natal" type="text" class="form-control" required="required">
            </div>
            <div class="col-2">
                  <input id="naturalidadeEstado" name="naturalidadeEstado" placeholder="Estado Natal" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12" style="margin-top:15px;">
              <b>Endereço</b>
              <hr/>
            </div>

        </div>
        <div class="form-group row">
          <div class="col-8">
            <input id="endereco" name="endereco" placeholder="Rua" type="text" class="form-control" required="required">
          </div>
          <div class="col-4">
            <input id="numero" name="numero" placeholder="Número" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-8">
            <input id="complemento" name="complemento" placeholder="Complemento" type="text" class="form-control" required="required">
          </div>
          <div class="col-4">
            <input id="bairro" name="bairro" placeholder="Bairro" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-4">
            <input id="complemento" name="complemento" placeholder="Cidade" type="text" class="form-control" required="required">
          </div>
          <div class="col-4">
            <input id="bairro" name="bairro" placeholder="Estado" type="text" class="form-control" required="required">
          </div>
          <div class="col-4">
            <input id="bairro" name="bairro" placeholder="Cep" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
            <div class="col-12" style="margin-top:15px;">
              <b>Responsáveis</b>
              <hr/>
            </div>

        </div>
        <div class="form-group row">
            <div class="col-12" style="margin-top:15px;">
              <b>Pai</b>
            </div>

        </div>
        <div class="form-group row">
            <div class="col-12">
                  <input id="nome" name="nomePai" placeholder="Nome do Pai" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                  <input id="cpfPai" name="cpfPai" placeholder="CPF do Pai" type="text" class="form-control" required="required">
            </div>
            <div class="col-6">
                  <input id="identidadePai" name="identidadePai" placeholder="Identidade do Pai" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                  <input id="profissaoPai" name="profissaoPai" placeholder="Profissão do Pai" type="text" class="form-control" required="required">
            </div>
            <div class="col-6">
                  <input id="localTrabalhoPai" name="localTrabalhoPai" placeholder="Local de Trabalho do Pai" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
          <div class="col-4">
                <input id="telefoneTrabalhoPai" name="telefoneTrabalhoPai" placeholder="Telefone do Trabalho do Pai" type="text" class="form-control" required="required">
          </div>
            <div class="col-4">
                  <input id="telefoneCasaPai" name="telefoneCasaPai" placeholder="Telefone da Casa do Pai" type="text" class="form-control" required="required">
            </div>
            <div class="col-4">
                  <input id="telefoneCelularPai" name="telefoneCelularPai" placeholder="Telefone Celular do Pai" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                  <input id="emailPai" name="emailpai" placeholder="Email do Pai" type="text" class="form-control" required="required">
            </div>
            <div class="col-6">
                  <input id="horarioPai" name="horarioPai" placeholder="Horário Preferido para Ligação" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Avançar</button>
          </div>
        </div>
      </form>

 </div> <!-- fim row -->
</div> <!-- fim container -->
