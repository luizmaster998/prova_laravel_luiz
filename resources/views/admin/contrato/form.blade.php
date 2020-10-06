<div class="form-group">
    <label for="titulo">Tipo Contrato</label>
    <input type="text" class="form-control" id="titulo" name="titulo"
           value="{{$contrato->Tipocontrato ?? ''}}">
</div>

<div class="form-group">
    <label for="descricao">envolvido 1</label>
    <input type="text" class="form-control" id="descricao" name="descricao"
           value="{{$contrato->descricao1 ?? ''}}">
</div>
<div class="form-group">
    <label for="descricao">envolvido 2</label>
    <input type="text" class="form-control" id="descricao" name="descricao"
           value="{{$contrato->descricao2 ?? ''}}">
</div>
<div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date</label>
    <div class="col-10">
      <input class="form-control" type="date" value="2011-08-19" id="example-date-input"
      value="{{$contrato->data ?? ''}}">

</div>
<div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" id="valor" name="valor"
           value="{{$contrato->valor ?? ''}}">
</div>

<div class="form-group">
    <label for="valor">Nome Tabeliao</label>
    <input type="text" class="form-control" id="valor" name="valor"
           value="{{$contrato->nomeTabeliao ?? ''}}">
</div>
