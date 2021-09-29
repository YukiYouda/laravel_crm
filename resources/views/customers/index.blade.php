@extends('layouts.main')

@section('title', '顧客一覧')

@section('content')
    <div class="m-4">
        <h1>顧客一覧</h1>

        <table class="table table-striped table-bordered">
            <tr>
                <th>顧客ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>郵便番号</th>
                <th>住所</th>
                <th>電話番号</th>
            </tr>
            @foreach ($customers as $customer)
                <tr>
                    <td><a href="{{ route('customers.show', $customer) }}">{{ $customer->id }}</a></td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->postcode }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phoneNumber }}</td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('customers.create') }}"><button type="submit" class="btn btn-primary">新規作成</button></a>
    </div>
@endsection
