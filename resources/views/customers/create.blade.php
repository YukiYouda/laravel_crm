@extends('layouts.main')

@section('title', '郵便番号検索')

@section('content')
    <div class="m-4">
        <h1>郵便番号検索画面</h1>
        @if (!empty($errors))
            <div class="error">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <form action="register" method="get">
            @csrf
            <div class="serch mt-4">
                <label for="postcode">郵便番号検索</label>
                <input type="text" name="postcode" id="postcode" placeholder="検索したい郵便番号">
                <button type="submit" class="btn btn-primary">検索</button>
            </div>
        </form>
        <div class="back mt-4">


            <a href="{{ route('customers.index') }}"><button type="submit" class="btn btn-primary">一覧に戻る</button></a>
        </div>
    </div>
@endsection
