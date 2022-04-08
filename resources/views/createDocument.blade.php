@extends('layouts.app')

@section('content')
    <div class="container  Main__box">
        <form action="{{ route('createDocument.createJD') }}" method="POST">
            {{ csrf_field() }}
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <p class="mb-0 text-left">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Титульный лист
                            </button>
                        </p>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <select class="form-control" name="Job">
                                <option selected disabled>должность</option>
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->name }}</option>
                                @endforeach
                            </select>
                            <br />
                            <label>Утверждать будет</label>
                            <br />
                            <select class="form-control" name="willClaim">
                                @foreach ($willClaims as $willClaim)
                                    <option value="{{ $willClaim->id }}">{{ $willClaim->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <p class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Общие положения
                            </button>
                        </p>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="struct_unit">
                                <select class="form-control" name="structUnit">
                                    <option disabled>структурное подразделение</option>
                                    @foreach ($structUnits as $su)
                                        <option value="{{ $su->id }}">{{ $su->struct_unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br />
                            <div class="immediate_supervisor">

                                <input type="text" class="form-control" name="directManger"
                                    placeholder="Непосредственный руководитель">

                            </div>
                            <br />
                            <div class="Senior_manager">

                                <input type="text" class="form-control" name="superiorManager"
                                    placeholder="вышестоящий руководитель">

                            </div>
                            <br />
                            <div class="required_education">

                                <input type="text" class="form-control" name="education"
                                    placeholder="требуемое образование">
                                <input type="text" class="form-control" name="experience"
                                    placeholder="стаж (далее вписать в род. падеже год/месяц)">
                            </div>
                            <br />
                            <div class="immediate_supervisor">

                                <input type="text" class="form-control" name="directMangerParentCase"
                                    placeholder="Непосредственный руководитель (в родительском падеже)">

                            </div>
                            <br />
                            <div class="Senior_manager">

                                <input type="text" class="form-control" name="superiorManagerAblative"
                                    placeholder="вышестоящий руководитель (творительный падеж)">

                            </div>
                            <br />
                            <div class="employee_should_know">

                                <label for="exampleInputEmail1">Работник должен знать</label>
                                <textarea type="text" name="empoyeeKnow" class="form-control"
                                    placeholder="каждый пункт начинается с новой стрки"></textarea>

                                <textarea class="form-control update-field" name="empoyeeKnowAuto" id="re1" cols="30"
                                    rows="10">—На время отсутствия Работника (командировка, отпуск, болезнь и прочее) его должностные обязанности исполняет лицо, назначенное в установленном порядке. Данное лицо приобретает соответствующие права и несет ответственность за качественное исполнение возложенных на него обязанностей.
                                                    —Сведения, содержащие персональные данные и составляющие коммерческую, служебную и иную охраняемую законом тайну и полученные Работником при выполнении своих обязанностей не подлежат разглашению, за исключением предусмотренных федеральным законом случаев.                                                    
                                                    —В своей деятельности Работник руководствуется действующим законодательством Российской Федерации, Уставом учреждения, Коллективным договором учреждения, правилами внутреннего трудового распорядка, положением о структурном подразделении, решениями ученого совета учреждения, решениями иных органов управления, координационных и совещательных органов, приказами и распоряжениями ректора, проректоров, иными локальными нормативными правовыми актами и организационно-распорядительными документами учрежденияя, настоящей должностной инструкцией.                                                
                                                    Работник должен знать:
                                                    • Основы трудового законодательства.
                                                    • Локальные нормативные акты учреждения, положение о структурном подразделении, решения ученого совета учреждения, положения, правила, инструкции, утверждаемые в установленном порядке.
                                                    • Основы организации труда, правила и нормы охраны труда, пожарной безопасности, санитарные нормы и правила, правила пользования средствами коллективной и индивидуальной защиты от воздействия опасных и вредных производственных факторов.
                                                    • Правила внутреннего трудового распорядка.
                                                    • Законодательство Российской Федерации и локальные нормативные акты учреждения о защите детей от информации, причиняющей вред их здоровью и (или) развитию, правила безопасного использования сети «Интернет» и средств защиты детей от информации, причиняющей вред их здоровью и развитию</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <p class="mb-0 text-left">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                должностные обязанности
                            </button>
                        </p>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <textarea class="form-control update-field" name="jobDuties" id="" cols="30" rows="10"></textarea>
                            <textarea class="form-control update-field" name="jobDutiesAuto" id="" cols="30" rows="10">—Участвовать в разработке проектов нормативной документации учреждения (положения, регламенты и др.) по направлению деятельности подразделения.
                                                —Участвовать в работе коллегиальных, координационных, совещательных органов, комиссий учрежденияа, обеспечивать исполнение обязанностей членов данных органов и комиссий.                                            
                                                —Обеспечивать сохранность и использовать по назначению материальные ценности и имущество учрежденияа, переданные и (или) находящиеся в пользовании Работника.                                            
                                                —Выполнять решения конференции работников и обучающихся учреждения, ученого совета учреждения, ректората, локальных нормативных актов и организационно-распорядительных документов учреждения по направлению деятельности структурного подразделения, поручений непосредственного и вышестоящего руководства в письменной и устной формах.                                            
                                                —Проходить аттестацию в порядке, установленном законодательством Российской Федерации, локальными нормативными актами и организационно-распорядительными документами учреждения.
                                        </textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <p class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="headingFour">
                                Права
                            </button>
                        </p>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <textarea class="form-control update-field" name="RightAuto" id="" cols="30" rows="10">—Действовать от имени учреждения по вопросам деятельности подразделения, представлять интересы подразделения во взаимоотношениях со структурными подразделениями учреждения, а также органами государственной власти и местного самоуправления, иными лицами, учреждениями и организациями независимо от организационно-правовой формы и форм собственности по направлению деятельности в рамках делегированных полномочий, закрепленных организационно-распорядительных документах и (или) доверенностях.
                                                —Вносить на рассмотрение руководству учреждения предложения по улучшению деятельности подразделения.                                            
                                                —Запрашивать от структурных подразделений учреждения необходимую для осуществления деятельности структурного подразделения информацию.                                        
                                                —Вносить на рассмотрение непосредственного и вышестоящего руководства представления о назначении, перемещении и освобождении от занимаемых должностей работников подразделения.                                            
                                                —Предоставлять предложения о поощрении работников, о привлечении к дисциплинарной ответственности, по улучшению деятельности организации и совершенствованию методов работы коллектива.                                            
                                                —Проводить совещания по вопросам деятельности подразделения, а также участвовать в проводимых руководством учреждения совещаниях по вопросам, относящимся к деятельности подразделения.                                            
                                                —Присутствовать на заседаниях, собраниях, по вопросам организации деятельности структурного подразделения.                                            
                                                —Участвовать в обсуждении вопросов относительно исполняемых им обязанностей.                                            
                                                —Давать указания, обязательные для всех работников подразделения.                                            
                                                —Подписывать и визировать документы в пределах своей компетенции.                                            
                                                —Участвовать в профессиональных и других общественных организациях, не запрещенных законодательством Российской Федерации.
                                        </textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <p class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false" aria-controls="headingFive">
                                Ответственность
                            </button>
                        </p>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="collapseFive"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <textarea class="form-control update-field" name="ResponsibilityAuto" id="" cols="30" rows="10">—За неисполнение или ненадлежащее исполнение своих обязанностей, превышение предоставленных полномочий, определенных локальными нормативными актами и организационно-распорядительными документами учреждения, трудовым договором (эффективным контрактом), настоящей должностной инструкцией.
                                            —За неисполнение или ненадлежащее исполнение законодательства и иных нормативных правовых актов Российской Федерации, инструктивных писем Министерства образования и науки Российской Федерации и Министерства науки и высшего образования Российской Федерации, локальных нормативных актов и организационно-распорядительных документов учреждения, поручений и распоряжений ректора, решений ученого совета и ректората учреждения, непосредственного и вышестоящего руководства.                                        
                                            —За неэффективность выполняемой работы в соответствии с возложенными обязанностями и предоставленными полномочиями, работы курируемых структурных подразделений.                                        
                                            —За разглашение конфиденциальных сведений, в том числе персональных данных, коммерческой тайны.                                        
                                            —За нарушение сохранности документов, образующихся в результате деятельности подразделения.                                        
                                            —За правонарушения, допущенные при осуществлении трудовой функции.                                        
                                            —За ущерб, причиненный Университету его виновными действиями (бездействиями) в порядке, предусмотренном законодательством РФ.                                        
                                            —За нарушение правил внутреннего трудового распорядка, производственной дисциплины, санитарных норм и правил, норм и правил охраны труда, правил и требований по обеспечению комплексной безопасности, в том числе пожарной, в подчиненных ему подразделениях.                                        
                                            —В иных случаях, предусмотренных законодательством Российской Федерации, локальными нормативными актами учреждения и организационно-распорядительными документами учреждения, трудовым договором, настоящей должностной инструкцией.
                                        </textarea>
                        </div>
                    </div>
                </div>
                @foreach ($typeReqs as $typeR)
                    <div class="card">
                        <div class="card-header" id="HeadingType{{ $typeR->id }}">
                            <p class="mb-0">
                                <button class="btn btn-link collapsed" type="button" name="type{{ $typeR->name }}"
                                    data-toggle="collapse" data-target="#type{{ $typeR->id }}" aria-expanded="false"
                                    aria-controls="heading{{ $typeR->name }}">
                                    {{ $typeR->nameType }}
                                </button>
                            </p>
                        </div>
                        <div id="type{{ $typeR->id }}" class="collapse" aria-labelledby="HeadingType{{ $typeR->id }}" data-parent="#accordionExample">
                            <div class="accordion" id="accordionRequirement">
                                @foreach ($typeR->requirements as $requirement)
                                    <div class="card">
                                        <div class="card-header" id="headingReq{{ $requirement->id }}">
                                            <p class="mb-0">
                                                <button class="btn btn-link collapsed"
                                                    name="requirement{{ $requirement->id }}" type="button"
                                                    data-toggle="collapse" data-target="#req{{ $requirement->id }}"
                                                    aria-expanded="false" aria-controls="req{{ $requirement->id }}">
                                                    {{ $requirement->name }}
                                                </button>
                                            </p>
                                        </div>
                                        <div id="req{{ $requirement->id }}" class="collapse" aria-labelledby="heading"
                                            data-parent="#accordionRequirement">
                                            <div class="card-body">
                                                <textarea class="form-control update-field" name="text{{ $requirement->id }}" id="" cols="30" rows="10">{{ $requirement->text }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="card-body">
                                <textarea class="form-control update-field" name="typeR{{ $typeR->id }}" id="" cols="30" rows="10">
                                        </textarea>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br />
            <input type="submit" value="Сформировать" class="btn btn-primary">
        </form>
    </div>
@endsection
