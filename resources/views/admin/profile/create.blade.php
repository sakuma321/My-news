@extends('layouts.profile')

@section('title', 'プロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
               
                <form action="{{ action('Admin\ProfileController@create')}}"  method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tile" value="{{ old('title') }}">
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-5">
                            <input type="radio" name="gender" value="man" > 男
                            <input type="radio" name="gender" value="woman" > 女
                        </label>
                        </div>
                    </div>
                    
            
                    
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tile" value="{{ old('title') }}">
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <labal class="col-md-2">自己紹介欄</labal></labal>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old ('body')}}</textarea>
                        </div>
                    </div>
                    
              
                    
                    
                    <div class="form-group row">
                        <label class="col-md-2"></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                    
                </form>
            </div>
        </div>
    </div>
@endsection