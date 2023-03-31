<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          プロフィール詳細画面
        </h2>
        <h3 class="font-semibold text-xl text-gray-600 leading-tight">
            ユーザネーム：
            <label for="username" class="font-semibold text-xl text-gray-600 leading-tight">{{ Auth::user()->username }}</label>
        </h3>
        <h3 class="font-semibold text-xl text-gray-600 leading-tight">
          ユーザID：
          <label for="userid" class="font-semibold text-xl text-gray-600 leading-tight">{{ Auth::user()->userid }}</label>
        </h3>
    </x-slot>
        
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
        <section class="text-gray-600 body-font relative">
        <div class="container px-5 mx-auto">
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          @if (isset($contacts))
            <ul>
              @foreach ($contacts as $contact)
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="age" class="leading-7 text-sm text-gray-600">年齢</label><br>
                      <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @if ($contact->age === 1)0～5歳
                        @elseif ($contact->age === 2)6～9歳
                        @elseif ($contact->age === 3)10～14歳
                        @elseif ($contact->age === 4)15～18歳
                        @elseif ($contact->age === 5)19～22歳
                        @elseif ($contact->age === 6)23～30歳
                        @elseif ($contact->age === 7)31～40歳
                        @elseif ($contact->age === 8)41～50歳
                        @elseif ($contact->age === 9)51～60歳
                        @elseif ($contact->age === 10)61歳～
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="p-2 w-full">
                    <div class="relative">
                      <label class="leading-7 text-sm text-gray-600">性別</label><br>
                      <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">                        
                        @if ($contact->gender === 1)男性
                        @elseif ($contact->gender === 2)女性
                        @elseif ($contact->gender === 3)その他
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="pstartage" class="leading-7 text-sm text-gray-600">ピアノ開始年齢</label><br>
                      <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @if ($contact->pstartage === 1)0～5歳
                        @elseif ($contact->pstartage === 2)6～9歳
                        @elseif ($contact->pstartage === 3)10～14歳
                        @elseif ($contact->pstartage === 4)15～18歳
                        @elseif ($contact->pstartage === 5)19～22歳
                        @elseif ($contact->pstartage === 6)23～30歳
                        @elseif ($contact->pstartage === 7)31～40歳
                        @elseif ($contact->pstartage === 8)41～50歳
                        @elseif ($contact->pstartage === 9)51～60歳
                        @elseif ($contact->pstartage === 10)61歳～
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="totalhistory" class="leading-7 text-sm text-gray-600">通算演奏歴</label><br>
                      <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">                        
                        @if ($contact->totalhistory === 1)～1年
                        @elseif ($contact->totalhistory === 2)1～3年
                        @elseif ($contact->totalhistory === 3)3～5年
                        @elseif ($contact->totalhistory === 4)5～7年
                        @elseif ($contact->totalhistory === 5)7～10年
                        @elseif ($contact->totalhistory === 6)10～15年
                        @elseif ($contact->totalhistory === 7)15～20年
                        @elseif ($contact->totalhistory === 8)20～30年
                        @elseif ($contact->totalhistory === 9)30年～
                        @endif
                      </div>    
                    </div>
                  </div>

                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="pianohon" class="leading-7 text-sm text-gray-600">ピアノ所持</label><br>
                      <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">                        
                        @if ($contact->pianohon === 1)グランドピアノ
                        @elseif ($contact->pianohon === 2)アップライトピアノ
                        @elseif ($contact->pianohon === 3)電子ピアノ
                        @elseif ($contact->pianohon === 4)キーボードその他
                        @elseif ($contact->pianohon === 5)所持なし
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="soundproofhon" class="leading-7 text-sm text-gray-600">防音室有無</label><br>
                      <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">                        
                        @if ($contact->soundproofhon === 1)有
                        @elseif ($contact->soundproofhon === 2)無
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="community" class="leading-7 text-sm text-gray-600">所属コミュニティ</label>
                      <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->community }}</div>
                    </div>
                  </div>

                  <form method="get" action="{{ route('myprofiles.edit', ['id' => $contact->id])}}">
                    <div class="p-2 w-full">
                      <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集</button>
                    </div>
                  </form>

                  {{-- <form id="delete_{{ $contact->id }}" method="post" action="{{ route('myprofiles.destroy', ['id' => $contact->id])}}">
                    @csrf
                    <div class="p-2 w-full">
                      <a href="#" data-id="{{ $contact->id }}" onclick="deletePost(this)" class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除</a>
                    </div>
                  </form> --}}
              @endforeach
            </ul>
          @else
            <p>No contacts found.</p>
          @endif
        </div>
        </div>
        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
        </div>



  <!-- 確認メッセージ -->
    {{-- <script>
      function deletePost(e){
      'use strict'
      if(confirm('本当に削除していいですか？')){
      document.getElementById('delete_' + e.dataset.id).submit()
      }
      }
    </script> --}}
  </x-app-layout>

