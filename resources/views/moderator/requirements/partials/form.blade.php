<label for="">название требования</label>

<input type="text" name="name" id="" class="form-control"  required>

<br>
<label for="">принадлежит из типов требований к</label>
<select class="form-control" name="typeReq">
    <option>Выберете тип требования</option>                                                  
    @foreach ($typeReqs as $typeReq)
      <option value="{{ $typeReq->id }}" > {{ $typeReq->nameType }} </option>
    @endforeach</select>     
<br>
<label for="">Описание</label>
<textarea type="text" name="text" id="" class="form-control" cols="20" rows="5"></textarea>
<br>

<input type="submit" value="Сохранить" class="btn btn-primary">
