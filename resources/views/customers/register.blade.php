@extends('layouts.main')

@section('title', '新規登録')

@section('content')
    <div class="m-4 text-center">
        <h1>新規登録画面</h1>
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


        <form action="{{ route('customers.store') }}" method="post">
            @csrf
            <div class="name mt-3 form-group justify-content-center row">
                <label for="name">名前</label>
                <input type="text" class="form-control w15" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="email mt-2 form-group justify-content-center row">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control w20" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="postcode mt-2 form-group justify-content-center row">
                <label for="postcode">郵便番号</label>
                <input type="text" class="form-control w15" name="postcode" id="postcode" value="{{ $zipcode }}">
            </div>
            <div class="address mt-2 form-group justify-content-center row">
                <label for="address">住所</label>
                <textarea name="address" class="form-control textarea" id="address" rows="5">{{ $address }}</textarea>
            </div>
            <div class="phone_number mt-2 form-group justify-content-center row">
                <label for="phone_number">電話番号</label>
                <input type="text" class="form-control w15" name="phone_number" id="phone_number"
                    value="{{ old('phone_number') }}">
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
