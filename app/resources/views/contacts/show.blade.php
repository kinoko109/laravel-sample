<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      詳細画面
    </h2>
  </x-slot>

  <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">

            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">名前</label>
                <p class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    {{ $contact->name }}
                </p>
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                <p class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    {{ $contact->title }}
                </p>
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                <p
                  class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  {{ $contact->email }}
                </p>
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                @if($contact->url)
                    <p
                    class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    {{ $contact->url }}
                    </p>
                @endif
                </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label class="leading-7 text-sm text-gray-600">性別</label>
                <p>{{ $checkedGender }}</p>
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label class="leading-7 text-sm text-gray-600">年齢</label>
                <p>{{ $checkedAge }}</p>
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                  <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                  <p
                  class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
                  {{ $contact->contact }}
                </p>
              </div>
            </div>

            <form action="{{ route('contacts.edit', ['id' => $contact->id]) }}" method="get">
                <div class="p-2 w-full">
                <button
                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集</button>
                </div>
            </form>

            <form id="delete_{{ $contact->id }}" action="{{ route('contacts.destroy', ['id' => $contact->id]) }}" method="post">
            @csrf
                <div class="p-2 w-full">
                <a href="#" data-id="{{ $contact->id }}" onclick="deletePost(this)" class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除</a>
                </div>
            </form>

          </div>
        </div>
      </div>
  </section>

  <script>
    function deletePost(e) {
        'use strict'
        if(confirm('本当に削除してよいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
  </script>
</x-app-layout>
