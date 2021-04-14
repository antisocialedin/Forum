@include('layouts.validacao')
<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-6 col-lg-12">
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
        <div class="col-xs-12 col-sm-6 col-sm-6 col-lg-12">
            <div class="form-group">
                <label for="sigla" class="control-label">Sigla:</label>
                <input  type="text" 
                        name="sigla" 
                        id="sigla" 
                        value="{{ isset($registro->sigla) ? $registro->sigla : '' }}"
                        class="form-control @error('sigla') is-invalid @enderror" />
                        @error('sigla')
                        <div class="invalid-feedback">
                            <span><strong>{{ $message }}</span></strong>
                        </div>
                        @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-6 col-lg-12">
            <div class="form-group">
                <label for="descricao" class="control-label">Descrição:</label>
                <input  type="text" 
                        name="descricao" 
                        id="descricao" 
                        value="{{ isset($registro->descricao) ? $registro->descricao : '' }}"
                        class="form-control @error('descricao') is-invalid @enderror"/>
                        @error('descricao')
                        <div class="invalid-feedback">
                            <span><strong>{{ $message }}</span></strong>
                        </div>
                    @enderror
            </div>
        </div>
    </div>

</div>
