@extends('layouts.app')

@section('content')

  
                <div class="container  Main__box">                
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Титульный лист
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                   
                                    <form>
                                        <input class="form-control" type="text" placeholder="Default input">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Default radio
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Second default radio
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                        <label class="form-check-label" for="exampleRadios3">
                                            Disabled radio
                                        </label>
                                        </div>
                                    </form>     
                                    </div>
                                </div>
                            </div>      
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Общие положения
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="struct_unit">
                                            <select class="form-control">
                                                <option>структурное подразделение</option>
                                                <option>Default select</option>
                                                <option>Default select</option>
                                            </select>
                                        </div>
                                        <div class="immediate_supervisor">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Непосредственный руководитель">
                                            </form>
                                        </div>
                                        <div class="Senior_manager">
                                            <form>
                                                <input type="text" class="form-control" placeholder="вышестоящий руководитель">
                                            </form>
                                        </div>
                                        <div class="required_education">
                                            <form>
                                                <input type="text" class="form-control" placeholder="требуемое образование">
                                            </form>
                                        </div>
                                        <div class="immediate_supervisor">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Непосредственный руководитель (в родительском падеже)">
                                            </form>
                                        </div>
                                        <div class="Senior_manager">
                                            <form>
                                                <input type="text" class="form-control" placeholder="вышестоящий руководитель (творительный падеж)">
                                            </form>
                                        </div>
                                        <div class="employee_should_know">
                                            <form>
                                            <label for="exampleInputEmail1">Работник должен знать</label>
                                                <input type="text" class="form-control" placeholder="каждый пункт начинается с новой стрки">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        должностные обязанности
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <textarea class="form-control update-field" name="list_do" id="" cols="30" rows="10"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="headingFour">
                                        Права
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="heading" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#five" aria-expanded="false" aria-controls="headingFour">
                                        Ответственность
                                    </button>
                                </h2>
                                </div>
                                <div id="five" class="collapse" aria-labelledby="heading" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                                </div>
                            </div>                            
                        </div>
                        <button type="button" class="btn btn-primary">Сфоримировать документ</button>
                </div>
                

@endsection
