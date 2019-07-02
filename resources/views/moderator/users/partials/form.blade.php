@csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Institute') }}</label>

                            <div class="col-md-6">                                
                                    <select class="form-control" name="institut_id">
                                    <option>Выберете учреждение</option>                                        
                                    @foreach ($institutions as $institute)
                                      <option value="{{ $institute->id }}" > {{ $institute->institut }} </option>
                                    @endforeach    </select>                                        
                            </div>                            
                    </div>
                        <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Jobs') }}</label>
    
                                <div class="col-md-6">                                
                                        <select class="form-control" name="job_id">
                                        <option>Выберете должность</option>                                                  
                                        @foreach ($jobs as $job)
                                          <option value="{{ $job->id }}" > {{ $job->name }} </option>
                                        @endforeach    </select>                                        
                                </div>                            
                        </div>
                
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Добавить администратора
                                </button>
                            </div>
                        </div>