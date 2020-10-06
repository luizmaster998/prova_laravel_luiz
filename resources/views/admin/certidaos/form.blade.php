<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo"
           value="{{$tarefa->titulo ?? ''}}">
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao"
           value="{{$tarefa->descricao ?? ''}}">
</div>
<div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" id="valor" name="valor"
           value="{{$tarefa->valor ?? ''}}">
</div>
<div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control-file" id="imagem" name="imagem">
</div>
@if(isset($tarefa->imagem))
    <div class="form-group">
        <img width="120" src="{{asset($tarefa->imagem)}}" />
    </div>
@endif
<div class="form-group">
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="publicado" name="publicado"
               {{ isset($tarefa->publicado) && $tarefa->publicado == 'sim' ? 'checked' : '' }}
               value="true">
        <label class="form-check-label" for="publicado">Publicado?</label>
    </div>
</div>
