<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            演奏曲登録
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
                    <form method="post" action="{{ route('mypianologs.store') }}">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                              {{-- <div class="p-2 w-full"> --}}
                                {{-- <div class="relative"> --}}
                                  {{-- <label for="userid" class="leading-7 text-sm text-gray-600">ユーザID</label> --}}
                                  <input type="hidden" id="userid" name="userid" value="{{ Auth::user()->userid }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{-- </div> --}}
                              {{-- </div> --}}
                              {{-- <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="composer" class="leading-7 text-sm text-gray-600">作曲家</label>
                                  <input type="composer" id="composer" name="composer" value="{{ old('composer') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div> --}}

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="composer" class="leading-7 text-sm text-gray-600">作曲家</label><br>
                                  <select name="composer">
                                    <option value="">選択してください</option>
                                    <option value="ショパン" {{ old('composer') ==  'ショパン' ? 'selected' : ""}}>ショパン</option>
                                    <option value="ベートーヴェン" {{ old('composer') ==  'ベートーヴェン' ? 'selected' : ""}}>ベートーヴェン</option>
                                    <option value="シューマン" {{ old('composer') ==  'シューマン' ? 'selected' : ""}}>シューマン</option>
                                    <option value="ドビュッシー" {{ old('composer') ==  'ドビュッシー' ? 'selected' : ""}}>ドビュッシー</option>
                                  </select>        
                                </div>
                              </div>

                              {{-- <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="song" class="leading-7 text-sm text-gray-600">曲名</label>
                                  <input type="song" id="song" name="song" value="{{ old('song') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div> --}}

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="song" class="leading-7 text-sm text-gray-600">曲名</label><br>
                                  <select name="song">
                                    <option value="">選択してください</option>
                                    <option value="ピアノソナタ 第14番 op.27-2 第1楽章 嬰ハ短調 月光" {{ old('song') ==  'ピアノソナタ 第14番 op.27-2 第1楽章 嬰ハ短調 月光' ? 'selected' : ""}}>ピアノソナタ 第14番 op.27-2 第1楽章 嬰ハ短調 月光</option>
                                    <option value="ピアノソナタ 第14番 op.27-2 第2楽章 嬰ハ短調 月光" {{ old('song') ==  'ピアノソナタ 第14番 op.27-2 第2楽章 嬰ハ短調 月光' ? 'selected' : ""}}>ピアノソナタ 第14番 op.27-2 第2楽章 嬰ハ短調 月光</option>
                                    <option value="ピアノソナタ 第14番 op.27-2 第3楽章 嬰ハ短調 月光" {{ old('song') ==  'ピアノソナタ 第14番 op.27-2 第3楽章 嬰ハ短調 月光' ? 'selected' : ""}}>ピアノソナタ 第14番 op.27-2 第3楽章 嬰ハ短調 月光</option>
                                    <option value="謝肉祭 op.9 キアリーナ" {{ old('song') ==  '謝肉祭 op.9 キアリーナ' ? 'selected' : ""}}>謝肉祭 op.9 キアリーナ</option>
                                    <option value="謝肉祭 op.9 前口上" {{ old('song') ==  '謝肉祭 op.9 前口上' ? 'selected' : ""}}>謝肉祭 op.9 前口上</option>
                                    <option value="謝肉祭 op.9 フロレスタン" {{ old('song') ==  '謝肉祭 op.9 フロレスタン' ? 'selected' : ""}}>謝肉祭 op.9 フロレスタン</option>
                                    <option value="謝肉祭 op.9 高貴なワルツ" {{ old('song') ==  '謝肉祭 op.9 高貴なワルツ' ? 'selected' : ""}}>謝肉祭 op.9 高貴なワルツ</option>
                                    <option value="バラード1番 op.23 ト短調" {{ old('song') ==  'バラード1番 op.23 ト短調' ? 'selected' : ""}}>バラード1番 op.23 ト短調</option>
                                    <option value="バラード2番 op.38 ヘ短調" {{ old('song') ==  'バラード2番 op.38 ヘ短調' ? 'selected' : ""}}>バラード2番 op.38 ヘ短調</option>
                                    <option value="バラード3番 op.47 変イ長調" {{ old('song') ==  'バラード3番 op.47 変イ長調' ? 'selected' : ""}}>バラード3番 op.47 変イ長調</option>                                                           
                                    <option value="バラード4番 op.52 ヘ短調" {{ old('song') ==  'バラード4番 op.52 ヘ短調' ? 'selected' : ""}}>バラード4番 op.52 ヘ短調</option>
                                    <option value="ピアノソナタ 第2番 op.22 第1楽章" {{ old('song') ==  'ピアノソナタ 第2番 op.22 第1楽章' ? 'selected' : ""}}>ピアノソナタ 第2番 op.22 第1楽章</option>
                                    <option value="ピアノソナタ 第2番 op.22 第2楽章" {{ old('song') ==  'ピアノソナタ 第2番 op.22 第2楽章' ? 'selected' : ""}}>ピアノソナタ 第2番 op.22 第2楽章</option>
                                    <option value="ピアノソナタ 第2番 op.22 第3楽章" {{ old('song') ==  'ピアノソナタ 第2番 op.22 第3楽章' ? 'selected' : ""}}>ピアノソナタ 第2番 op.22 第3楽章</option>
                                    <option value="子供の領分 グラドゥス・アド・パルナッスム博士" {{ old('song') ==  '子供の領分 グラドゥス・アド・パルナッスム博士' ? 'selected' : ""}}>子供の領分 グラドゥス・アド・パルナッスム博士</option>
                                    <option value="子供の領分 象の子守歌" {{ old('song') ==  '子供の領分 象の子守歌' ? 'selected' : ""}}>子供の領分 象の子守歌</option>
                                    <option value="子供の領分 人形のセレナード" {{ old('song') ==  '子供の領分 人形のセレナード' ? 'selected' : ""}}>子供の領分 人形のセレナード</option>
                                    <option value="子供の領分 雪は踊っている" {{ old('song') ==  '子供の領分 雪は踊っている' ? 'selected' : ""}}>子供の領分 雪は踊っている</option>
                                    <option value="子供の領分 小さな羊飼い" {{ old('song') ==  '子供の領分 小さな羊飼い' ? 'selected' : ""}}>子供の領分 小さな羊飼い</option>
                                    <option value="子供の領分 ゴリウォーグのケークウォーク" {{ old('song') ==  '子供の領分 ゴリウォーグのケークウォーク' ? 'selected' : ""}}>子供の領分 ゴリウォーグのケークウォーク</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="difficulty" class="leading-7 text-sm text-gray-600">体感難易度</label><br>
                                  <select name="difficulty">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('difficulty') ==  1 ? 'selected' : ""}}>1</option>
                                    <option value="2" {{ old('difficulty') ==  2 ? 'selected' : ""}}>2</option>
                                    <option value="3" {{ old('difficulty') ==  3 ? 'selected' : ""}}>3</option>
                                    <option value="4" {{ old('difficulty') ==  4 ? 'selected' : ""}}>4</option>
                                    <option value="5" {{ old('difficulty') ==  5 ? 'selected' : ""}}>5</option>
                                    <option value="6" {{ old('difficulty') ==  6 ? 'selected' : ""}}>6</option>
                                    <option value="7" {{ old('difficulty') ==  7 ? 'selected' : ""}}>7</option>
                                    <option value="8" {{ old('difficulty') ==  8 ? 'selected' : ""}}>8</option>
                                    <option value="9" {{ old('difficulty') ==  9 ? 'selected' : ""}}>9</option>
                                    <option value="10" {{ old('difficulty') ==  10 ? 'selected' : ""}}>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="degree" class="leading-7 text-sm text-gray-600">必要度数</label><br>
                                  <select name="degree">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('degree') ==  1 ? 'selected' : ""}}>1</option>
                                    <option value="2" {{ old('degree') ==  2 ? 'selected' : ""}}>2</option>
                                    <option value="3" {{ old('degree') ==  3 ? 'selected' : ""}}>3</option>
                                    <option value="4" {{ old('degree') ==  4 ? 'selected' : ""}}>4</option>
                                    <option value="5" {{ old('degree') ==  5 ? 'selected' : ""}}>5</option>
                                    <option value="6" {{ old('degree') ==  6 ? 'selected' : ""}}>6</option>
                                    <option value="7" {{ old('degree') ==  7 ? 'selected' : ""}}>7</option>
                                    <option value="8" {{ old('degree') ==  8 ? 'selected' : ""}}>8</option>
                                    <option value="9" {{ old('degree') ==  9 ? 'selected' : ""}}>9</option>
                                    <option value="10" {{ old('degree') ==  10 ? 'selected' : ""}}>10</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="playingtime" class="leading-7 text-sm text-gray-600">演奏時間</label><br>
                                  <select name="playingtime">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('playingtime') ==  1 ? 'selected' : ""}}>1分以内</option>
                                    <option value="2" {{ old('playingtime') ==  2 ? 'selected' : ""}}>2分以内</option>
                                    <option value="3" {{ old('playingtime') ==  3 ? 'selected' : ""}}>3分以内</option>
                                    <option value="4" {{ old('playingtime') ==  4 ? 'selected' : ""}}>4分以内</option>
                                    <option value="5" {{ old('playingtime') ==  5 ? 'selected' : ""}}>5分以内</option>
                                    <option value="6" {{ old('playingtime') ==  6 ? 'selected' : ""}}>6分以内</option>
                                    <option value="7" {{ old('playingtime') ==  7 ? 'selected' : ""}}>7分以内</option>
                                    <option value="8" {{ old('playingtime') ==  8 ? 'selected' : ""}}>8分以内</option>
                                    <option value="9" {{ old('playingtime') ==  9 ? 'selected' : ""}}>9分以内</option>
                                    <option value="10" {{ old('playingtime') ==  10 ? 'selected' : ""}}>10分以内</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <input type="checkbox" id="caution" name="caution">注意事項に同意
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">演奏曲登録</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </form>
                      </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
