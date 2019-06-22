<label for="">имя института</label>
<input type="text" name="institut" id="" class="form-control" value="{{$institutions->institut or ""}}" required>

<br>

<label for="">Описание</label>
<input type="text" name="description" id="" class="form-control" value="{{$institutions->description or ""}}">

<br>

<input type="submit" value="Сохранить" class="btn btn-primary">
