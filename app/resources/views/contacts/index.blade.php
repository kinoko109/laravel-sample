<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            お問い合わせ一覧
        </h2>
        <form action="{{ route('contacts.index') }}" method="get">
            <input type="text" name="search" placeholder="検索">
            <button type="submit">検索</button>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul>
                        @foreach($contacts as $contact)
                            <li>
                                <div>
                                    <span>id</span>
                                    <span>{{ $contact->id }}</span>
                                </div>
                                <div>
                                    <span>name</span>
                                    <span>{{ $contact->name }}</span>
                                </div>
                                <div>
                                    <span>title</span>
                                    <span>{{ $contact->title }}</span>
                                </div>
                                <div>
                                    <span>created_at</span>
                                    <span>{{ $contact->created_at }}</span>
                                </div>
                                <div>
                                    <span>詳細</span>
                                    <a href="{{ route('contacts.show', ['id' => $contact->id]) }}">詳細リンク</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <br>
                    <a class="" href="{{ route('contacts.create') }}">新規登録</a>
                </div>
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
