@extends('layouts.app')

@section('content')
<form method="GET" action="{{ route('admin') }}">
    <input type="text" name="name" placeholder="名前やメールアドレスを入力してください" value="{{ request('name') }}">
    <!-- 他の検索フォーム -->

    <button type="submit">検索</button>
    <button type="reset">リセット</button>
</form>

<table>
    <thead>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th>詳細</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
            <td>{{ $contact->gender }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->category->content }}</td>
            <td><button data-id="{{ $contact->id }}">詳細</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $contacts->links() }}

<!-- 詳細モーダル -->
<div id="detailModal" style="display:none;">
    <!-- モーダルコンテンツ -->
</div>
@endsection
