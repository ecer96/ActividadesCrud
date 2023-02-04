<div>
@csrf
    <div class="row">
        <div class="col-sm-12">
            <label for="input-nombre" class="form-label">
                Nombre de la Tarea
            </label>
            <input type="text" name="nombre" id="input-nombre" class="form-control" placeholder="..." value="{{old('nombre'),$tarea->nombre }}">
        </div>

        <div class="form-check">
            <input type="checkbox" name="finalizada" id="input-finalizada" class="form-check-input" @checked(old('finalizada', $tarea->finalizada)) >
            <label for="input-finalizada" class="form-check-label">Finalizada</label>

        </div>

        <div>
            <label for="select-urgencia" class="form-label">*Urgencia</label>
            <select name="urgencia" id="select-urgencia" class="form-select">
                @for ($i=0;$i<count($urgencias);$i++)
                    <option value="{{$i}}" @selected(old('urgencia',$tarea->urgencias))>{{$urgencias[$i]}}</option>
                @endfor
            </select>
        </div>
        <script>
            document.getElementById('select-urgencia').value="old('urgencia')";
        </script>

        <div class="col-sm-12">
            <label for="input-fechaLimite" class="form-label"> *Fecha Limite</label>
            <input type="datetime-local" name="fecha_limite" id="input-fechaLimite" class="form-control" value="{{old('fecha_limite' , isset($tarea->fecha_limite) ? $tarea->fecha_limite->format('Y-m-d\TH:i') : '')}} "
            ">
        </div>

        <div class="col-sm-12">
            <label for="text-descripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" id="text-descripcion" cols="30" rows="10">{{old('descripcion',$tarea->descripcion)}}</textarea>
        </div>

        <div class="col-sm-12 my-2">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </div>

    </div>
</div>