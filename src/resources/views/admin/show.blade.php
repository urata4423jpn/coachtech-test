@extends('layouts.app')

@section('content')
    <h1>詳細</h1>

    <p><strong>ID:</strong> {{ $contact->id }}</p>
    <p><strong>名前:</strong> {{ $contact->first_name }} {{ $contact->last_name }}</p>
    <p><strong>性別:</strong> {{ $contact->gender }}</p>
    <p><strong>メールアドレス:</strong> {{ $contact->email }}</p>
    <p><strong>電話番号:</strong> {{ $contact->tell }}</p>
    <p><strong>住所:</strong> {{ $contact->address }}</p>
    <p><strong>建物:</strong> {{ $contact->building }}</p>
    <p><strong>お問い合わせ内容:</strong> {{ $contact->detail }}</p>

    <a href="{{ route('admin') }}">戻る</a>
@endsection
