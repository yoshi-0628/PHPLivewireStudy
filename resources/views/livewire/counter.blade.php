<div>
    @if (session('flash_message'))
    <div class="flash_message">
        {{ session('flash_message') }}
    </div>
    @endif
    <h2>ユーザ一覧</h2>
    <ul>
        @foreach($users as $user)
        <li>{{ $user->name }} <button wire:click="delUser({{ $user->id }})">削除</button></li>
        @endforeach
    </ul>
</div>