@extends('layouts.main')

@section('title', '新規登録')

@section('content')
    <div class="m-4">
        @if ($errors->any())
            <div class="error">
                <p>
                    <b>{{ count($errors) }}件のエラーがあります。</b>
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>新規登録画面</h1>

        <form action="{{ route('customers.store') }}" method="post">
            @csrf
            <div class="name mt-3 form-group">
                <label for="name">名前</label>
                <input type="text" class="form-control w15" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="email mt-2 form-group">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control w15" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="postcode mt-2 form-group">
                <label for="postcode">郵便番号</label>
                <input type="text" class="form-control w15" name="postcode" id="postcode" value="{{ $zipcode }}">
            </div>
            <div class="address mt-2 form-group">
                <label for="address">住所</label>
                <textarea name="address" class="form-control textarea" id="address" rows="5">{{ $address }}</textarea>
            </div>
            <div class="phoneNumber mt-2 form-group">
                <label for="phoneNumber">電話番号</label>
                <input type="text" class="form-control w15" name="phoneNumber" id="phoneNumber"
                    value="{{ old('phoneNumber') }}">
            </div>
            <div class="register mt-4">
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
        <div class="back mt-2">
            <a href="{{ route('customers.create') }}"><button type="submit" class="btn btn-primary">郵便番号検索に戻る</button></a>
        </div>
    </div>
@endsection
