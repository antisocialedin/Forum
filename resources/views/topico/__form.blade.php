@include('layouts.validacao')
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="titulo" class="control-label">Titulo:</label>
                <input  type="text" 
                        name="titulo" 
                        id="titulo" 
                        value="{{ isset($registro->titulo) ? $registro->titulo : '' }}"
                        class="form-control @error('titulo') is-invalid @enderror" />
                @error('titulo')
                <div class="invalid-feedback">
                    <span><strong>{{ $message }}</span></strong>
                </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="conteudo" class="control-label">Conteudo:</label>
                <input  type="text" 
                        name="conteudo" 
                        id="conteudo" 
                        value="{{ isset($registro->conteudo) ? $registro->conteudo : '' }}"
                        rows="10"
                        class="form-control @error('conteudo') is-invalid @enderror"/>
                        @error('conteudo')
                        <div class="invalid-feedback">
                            <span><strong>{{ $message }}</span></strong>
                        </div>
                        @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="usuario_id" class="control-label">Usuario:</label>
                <select type="text" 
                        name="usuario_id" 
                        id="usuario_id" 
                        class="form-control @error('avaliacao') is-invalid @enderror">
                        @foreach ($usuarios as $usuario)
                            <option  value="{{ $usuario->id }}">{{ $usuario->nick }}</option>
                        @endforeach
                </select>       
                @error('usuario_id')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="comunidade_id" class="control-label">Comunidade:</label>
                <select  type="text" 
                        name="comunidade_id" 
                        id="comunidade_id" 
                        class="form-control @error('avaliacao') is-invalid @enderror">
                        @foreach ($comunidades as $comunidade)
                            <option  value="{{ $comunidade->id }}">{{ $comunidade->titulo }}</option>
                        @endforeach
                </select>       
                @error('comunidade_id')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="avaliacao" class="control-label">Avaliação:</label>
                <input  type="text" 
                        name="avaliacao" 
                        id="avaliacao" 
                        value="{{ isset($registro->avaliacao) ? $registro->avaliacao : '' }}"
                        class="form-control @error('avaliacao') is-invalid @enderror"/>
                        @error('avaliacao')
                        <div class="invalid-feedback">
                            <span><strong>{{ $message }}</span></strong>
                        </div>
                    @enderror
            </div>
        </div>
    </div>

</div>
