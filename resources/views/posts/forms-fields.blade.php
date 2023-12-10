<div class="mb-3">
    <label class="form-label" for="Titulo">Titulo</label>
    {{-- old() en caso en que el usuario ingrese un input pero el otro input no se haya ingresado evitara que se pierda lo ingresado en el input --}}
    <input type="text" class="form-control" name="Titulo" value="{{ old('Titulo', $valor->Titulo) }}">
    @error('Titulo')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    {{-- </div> --}}
</div>

<div class="mb-3">
    <label class="form-label" for="Que_es">Que es</label>
    <textarea  class="form-control" type="text" name="Que_es" rows="5">{{ old('Que_es', $valor->Que_es) }}</textarea>

    @error('Que_es')
        {{-- muestra el mensaje de error $message variable global --}}
       <span class="text-danger">{{ $message }}</span>
    @enderror

</div><br>
