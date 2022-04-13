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
        <label for="institut" class="col-md-4 col-form-label text-md-right">{{ __('Institute') }}</label>

        <div class="col-md-6">
            <select v-model="institut" class="form-control @error('institut_id') is-invalid @enderror" name="institut_id">
                <option value="" selected disabled>Выберете учреждение</option>
                @foreach ($institutions as $institute)
                    <option value="{{ $institute->id }}"> {{ $institute->name }} </option>
                @endforeach
            </select>
            @error('institut id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('job_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <job-form-component v-if="institut"  :institut-data="{institut}"></job-form-component>
    @isset($roles)
    <div class="form-group row">
        <label for="roles" class="col-md-4 col-form-label text-md-right">{{ __('Roles') }}</label>

        <div class="col-md-6">                                
            <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                <option selected disabled>Выберете роль</option>                                                  
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" > {{ $role->name }} </option>
                @endforeach
            </select>
            @error('role_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror                                  
        </div>                            
    </div>
    @endisset
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
                Добавить пользователя
            </button>
        </div>
    </div>