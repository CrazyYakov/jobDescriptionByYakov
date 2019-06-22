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
                                        <input class="form-control" type="text" placeholder="должность / профессия">
                                        <label>Утверждать будет</label>
                                       
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        Т.Д.Карминская
                                        </label>
                                        </div>
                                       
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
                                                <option disabled>структурное подразделение</option>
                                                <option value="1">Администрация</option>
                                                <option value="2">Бухгалтерия</option>
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
                                                <textarea type="text" class="form-control" placeholder="каждый пункт начинается с новой стрки"></textarea>
                                            </form>
                                            <textarea class="form-control update-field" name="req1" id="re1" cols="30" rows="10">                                              
                                            </textarea>
                                            
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
                                    <textarea class="form-control update-field" name="list_do" id="" cols="30" rows="10">
                                    </textarea>
                                    
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
                                    <textarea class="form-control update-field" name="list_do" id="" cols="30" rows="10">
                                    </textarea>
                                    
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
                                <textarea class="form-control update-field" name="list_do" id="" cols="30" rows="10">
                                    </textarea>
 <script> src="/js/scriptCrDoc.js"
    var rector = checkRector();
 </script>
                                </div>
                                </div>
                            </div>                            
                            <a class="btn btn-primary" href="{{ url('/createDocument/createJD') }}" role="button">Сфоримировать документ</a>
                        </div>                        
                </div>
                
@endsection
