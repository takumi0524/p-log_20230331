<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            演奏曲編集画面
        </h2>
        {{-- <h3 class="font-semibold text-xl text-gray-600 leading-tight">
          ユーザネーム：
          <label for="username" class="font-semibold text-xl text-gray-600 leading-tight">{{ Auth::user()->username }}</label>
        </h3> --}}
        <h3 class="font-semibold text-xl text-gray-600 leading-tight">
          ユーザID：
          <label for="userid" class="font-semibold text-xl text-gray-600 leading-tight">{{ Auth::user()->userid }}</label>
        </h3>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                  <x-auth-validation-errors class="mb-4" :errors="$errors" />
                  
                  <section class="text-gray-600 body-font relative">
                    <form method="post" action="{{ route('mypianologs.update', ['id' => $mypianolog->id ]) }}">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                              <input type="hidden" id="userid" name="userid" value="{{ Auth::user()->userid }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                              
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="composer" class="leading-7 text-sm text-gray-600">作曲家</label>
                                  <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $mypianolog->composer }}</div>
                                </div>
                              </div>
                              <input type="hidden" id="composer" name="composer" value="{{ $mypianolog->composer }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                              
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="song" class="leading-7 text-sm text-gray-600">曲名</label>
                                  <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $mypianolog->song }}</div>
                                </div>
                              </div>
                              <input type="hidden" id="song" name="song" value="{{ $mypianolog->song }}"class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">



                              {{-- <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="composer" class="leading-7 text-sm text-gray-600">作曲家</label>
                                  <input type="composer" id="composer" name="composer" value="{{ $mypianolog->composer }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>
                              
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="song" class="leading-7 text-sm text-gray-600">曲名</label>
                                  <input type="song" id="song" name="song" value="{{ $mypianolog->song }}"class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div> --}}


                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="difficulty" class="leading-7 text-sm text-gray-600">体感難易度</label><br>
                                  <select name="difficulty">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->difficulty == 1) selected @endif>1</option>
                                    <option value="2" @if($mypianolog->difficulty == 2) selected @endif>2</option>
                                    <option value="3" @if($mypianolog->difficulty == 3) selected @endif>3</option>
                                    <option value="4" @if($mypianolog->difficulty == 4) selected @endif>4</option>
                                    <option value="5" @if($mypianolog->difficulty == 5) selected @endif>5</option>
                                    <option value="6" @if($mypianolog->difficulty == 6) selected @endif>6</option>
                                    <option value="7" @if($mypianolog->difficulty == 7) selected @endif>7</option>
                                    <option value="8" @if($mypianolog->difficulty == 8) selected @endif>8</option>
                                    <option value="9" @if($mypianolog->difficulty == 9) selected @endif>9</option>
                                    <option value="10" @if($mypianolog->difficulty == 10) selected @endif>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="degree" class="leading-7 text-sm text-gray-600">必要度数</label><br>
                                  <select name="degree">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->degree == 1) selected @endif>1</option>
                                    <option value="2" @if($mypianolog->degree == 2) selected @endif>2</option>
                                    <option value="3" @if($mypianolog->degree == 3) selected @endif>3</option>
                                    <option value="4" @if($mypianolog->degree == 4) selected @endif>4</option>
                                    <option value="5" @if($mypianolog->degree == 5) selected @endif>5</option>
                                    <option value="6" @if($mypianolog->degree == 6) selected @endif>6</option>
                                    <option value="7" @if($mypianolog->degree == 7) selected @endif>7</option>
                                    <option value="8" @if($mypianolog->degree == 8) selected @endif>8</option>
                                    <option value="9" @if($mypianolog->degree == 9) selected @endif>9</option>
                                    <option value="10" @if($mypianolog->degree == 10) selected @endif>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingtime" class="leading-7 text-sm text-gray-600">演奏時間</label><br>
                                  <select name="playingtime">
                                    <option value="">選択してください</option>
                                    <option value="1" @if($mypianolog->playingtime == 1) selected @endif>1分以内</option>
                                    <option value="2" @if($mypianolog->playingtime == 2) selected @endif>2分以内</option>
                                    <option value="3" @if($mypianolog->playingtime == 3) selected @endif>3分以内</option>
                                    <option value="4" @if($mypianolog->playingtime == 4) selected @endif>4分以内</option>
                                    <option value="5" @if($mypianolog->playingtime == 5) selected @endif>5分以内</option>
                                    <option value="6" @if($mypianolog->playingtime == 6) selected @endif>6分以内</option>
                                    <option value="7" @if($mypianolog->playingtime == 7) selected @endif>7分以内</option>
                                    <option value="8" @if($mypianolog->playingtime == 8) selected @endif>8分以内</option>
                                    <option value="9" @if($mypianolog->playingtime == 9) selected @endif>9分以内</option>
                                    <option value="10" @if($mypianolog->playingtime == 10) selected @endif>10分以内</option>
                                  </select>        
                                </div>
                              </div>


                              <input type="hidden" id="caution" name="caution" value="1">


                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新</button>
                              </div>                              
                            </div>
                          </div>
                        </div>
                      </form>
                      <form id="delete_{{ $mypianolog->id }}" method="post" action="{{ route('mypianologs.destroy', ['id' => $mypianolog->id])}}">
                        @csrf
                        <div class="p-2 w-full flex">
                          <a href="#" data-id="{{ $mypianolog->id }}" onclick="deletePost(this)" class="mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除</a>
                        </div>
                      </form>
                      </section>

                </div>
            </div>
        </div>
    </div>
        <!-- 確認メッセージ -->
    <script>
      function deletePost(e){
      'use strict'
      if(confirm('本当に削除していいですか？')){
      document.getElementById('delete_' + e.dataset.id).submit()
      }
      }
    </script>
</x-app-layout>
