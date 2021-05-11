@include('layouts.validacao')

<div class="row">
    <div class="col-sm-4">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div id="drop-zone">
                        <div id="fotoBanco">
                            <input type="hidden" id="profile_pic" name="profile_pic"/>
                            <img id="imageUpload" src="{{ isset($registro->profile_pic) ? 
                                                  url('/imagem', $registro->profile_pic) :
                                                  url('/imagem', 'boy.png') }}" class="avatar" />
                        </div>
                        <div id="clickHereLeft" style="float:left;">
                            <div style="text-align: center;">
                                <label for="fileInput"><i class="fa fa-upload fa-lg" ></i></label>
                            </div>
                            <input type="file" accept=".jpg,.jpeg,.png" id="fileInput"
                                class="form-control hide btn-responsive">
        
                        </div>
                        <div id="clickHereRight" style="float:right;">
                            <div style="text-align: center;">
                                <label for="fileExcluir"><i class="fa fa-trash fa-lg"></i></label>
                            </div>
                            <input type="button" id="fileExcluir" class="form-control hide btn-responsive">
     
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
    <input type="hidden" name="id" id="id" value="{{ isset( $registro->id ) ? $registro->id : ''  }}"/>
</div>

@section('javascript')

<script>

$("#fileInput").change(function(e){
           e.preventDefault();
           enviarFoto(this);
        });

        $("#fileExcluir").click(function(e){
           e.preventDefault();
           excluirFoto(this);
        });

          //preparar um pacote
        function enviarFoto(input){

          if (input.files && input.files[0]){
              var reader = new FileReader();
              var filename = $('#fileInput').val();
              filename = filename.substring(filename.lastIndexOf('\\')+1);
              reader.onload = function(e){
                  $('#imageUpload').attr('src', e.target.result);
                  $('#imageUpload').hide();
                  $('#imageUpload').fadeIn(500);
              }
              reader.readAsDataURL(input.files[0])
              sendToServer(input.files[0])
          }
     
        }


        function sendToServer(foto){
            var formData = new FormData();
            formData.append('image',foto);
            formData.append('id',$('#id').val());
            $.ajax({
                url: "{{ url('/store') }}",
                method: 'POST',
                data:formData,
                dataType:'JSON',
                cache:false, 
                contentType:false,
                processData: false,
                beforeSend: function(xhr, type) {
                    if (!type.crossDomain) {
                        xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                    }
                },
                success : function(response){
                    $('#profile_pic').val(response.nomeArquivo);
                },
                error:function(data){
                    console.log("erro de upload "+data)
                }
            })   
            
        }

        function excluirFoto(e){
            $.ajax({
                url: "{{ url('/imagem/excluir') }}",
                type:"POST",
                data:{
                    image: $('#profile_pic').val()
                },
                beforeSend: function(xhr, type) {
                    if (!type.crossDomain) {
                        xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                    }
                },
                success: function(response){
                    console.log(response.nomeArquivo);
                    $('#profile_pic').val('');
                    document.getElementById('imageUpload').src = "{{ url('/imagem', 'boy.png') }}";
                    $('#profile_pic').val(response.nomeArquivo);
                    $('#fileInput').val('');
                },
                error:function(response){
                    document.getElementById('imageBanco').src = "{{ url('/imagem', 'boy.png') }}";
                    $('#profile_pic').val(response.nomeArquivo);
                    $('#fileInput').val('');
               }

            })

        }

</script>

@endsection
