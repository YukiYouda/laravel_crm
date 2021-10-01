@extends('layouts.main')

@section('title', '顧客詳細')

@section('content')
    <div class="m-4">

        <h1>顧客詳細画面</h1>

        <table class="table table-striped table-bordered">
            <tr>
                <th>顧客ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>郵便番号</th>
                <th>住所</th>
                <th>電話番号</th>
            </tr>
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->postcode }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone_number }}</td>
            </tr>
        </table>

        <div class="edit mt-4">
            <a href="{{ route('customers.edit', $customer) }}"><button type="submit"
                    class="btn btn-primary">編集画面</button></a>
        </div>
        <div class="delete mt-1">
            <form action="{{ route('customers.destroy', $customer) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary"
                    onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
            </form>
        </div>

        <div class="back mt-1">
            <a href="{{ route('customers.index') }}"><button type="submit" class="btn btn-primary">一覧に戻る</button></a>
        </div>

    </div>
@endsection
