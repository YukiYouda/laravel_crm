@extends('layouts.main')

@section('title', '編集')

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

        <h1>編集画面</h1>

        <form action="{{ route('customers.update', $customer) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mt-3 form-group">
                <label for="name">名前</label>
                <input type="text" class="form-control w15" name="name" id="name"
                    value="{{ old('name', $customer->name) }}">
            </div>
            <div class="email mt-2 form-group">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control w15" name="email" id="email"
                    value="{{ old('email', $customer->email) }}">
            </div>
            <div class="postcode mt-2 form-group">
                <label for="postcode">郵便番号</label>
                <input type="text" class="form-control w15" name="postcode" id="postcode"
                    value="{{ old('postcode', $customer->postcode) }}">
            </div>
            <div class="address mt-2 form-group">
                <label for="address">住所</label>
                <textarea name="address" class="form-control textarea" id="address" cols="30"
                    rows="10">{{ old('address', $customer->address) }}</textarea>
            </div>
            <div class="phoneNumber mt-2 form-group">
                <label for="phoneNumber">電話番号</label>
                <input type="text" class="form-control w15" name="phoneNumber" id="phoneNumber"
                    value="{{ old('phoneNumber', $customer->phoneNumber) }}">
            </div>
            <div class="update mt-4">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
        </form>
        <div class="back mt-2">
            <a href="{{ route('customers.index') }}"><button type="submit" class="btn btn-primary">戻る</button></a>
        </div>
    </div>
@endsection
