@include('layouts.validacao')

<div class="row">
    <div class="col-sm-4">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div id="drop-zone">
                        <div id="fotoBanco">
                            <input type="hidden" id="profile_pic" name="profile_pic">
                            @if (isset($registro->profile_pic))
                                <img scr="{{ url('/imagem', $registro->profile_pic) }}" class="avatar" />
                            @else
                                <img id="imageUpload" scr="{{ url('/imagem', 'boy.png') }}" class="avatar" />
                            @endif
                        </div>
                        <div id="clickHereLeft" style="float: left">
                            <input type="file" accept=".jpg, .jpeg, .png" id="fileInput"
                            class="form-control hide btn-responsive">
                            <div style="text-align: center;">
                                <label for="fileInput"><i class="fa fa-upload fa-lg"></i></label>
                            </div>
                        </div>
                        <div id="clickHereRight" style="float: right">
                            <input type="button" id="fileExcuir" class="form-control hide btn-responsive">
                            <div style="text-align: center;">
                                <label for="fileExcluir"><i class="fa fa-trash fa-lg"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-8">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="nick" class="control-label">Nick:</label>
                    <input  
                        type="text" 
                        name="nick" 
                        id="nick" 
                        value="{{ isset($registro->nick) ? $registro->nick : '' }}"
                        class="form-control @error('nick') is-invalid @enderror" 
                    />
                    @error('nome')
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
                    <label for="email" class="control-label">Email:</label>
                    <input  
                        type="text" 
                        name="email" 
                        id="email" 
                        value="{{ isset($registro->email) ? $registro->email : '' }}"
                        class="form-control @error('email') is-invalid @enderror" 
                    />
                    @error('email')
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
                    <label for="selo" class="control-label">Selo:</label>
                    <input  
                        type="text" 
                        name="selo" 
                        id="selo" 
                        value="{{ isset($registro->selo) ? $registro->selo : '' }}"
                        {{-- value="Novato" --}} 
                        {{-- disabled="disabled" --}}
                        class="form-control @error('selo') is-invalid @enderror"
                    />
                    @error('selo')
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
                    <label for="senha" class="control-label">Senha:</label>
                    <input  
                        type="password" 
                        name="senha" 
                        id="senha" 
                        class="form-control @error('senha') is-invalid @enderror" 
                    />
                    @error('senha')
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
                    <label for="confirmar_senha" class="control-label">Confirmar a Senha:</label>
                    <input  
                        type="password" 
                        name="confirmar_senha" 
                        id="confirmar_senha" 
                        class="form-control @error('confirmar_senha') is-invalid @enderror" 
                    />
                    @error('confirmar_senha')
                        <div class="invalid-feedback">
                            <span><strong>{{ $message }}</span></strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div> 
</div>

@section('javascript')

    <script>
         $("#fileInput").change(function(e)){
             e.preventDefault();
             enviarFoto(this)
         });

         $("#fileExcluir").click(function(e){
             e.preventDefault();
             excluirFoto(this);
         });

         //preparar um pacote
         function enviarFoto(input){
            sendToServer(input)
         }

         function sendToServer(input){
             
         }

         function excluirFoto(e){

         }
    </script>
   
@endsection