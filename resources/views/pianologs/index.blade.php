<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ピアノ演奏曲一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <form class="mb-8" method="get" action="{{ route('pianologs.index') }}">
                  @csrf  
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="composer_id" class="leading-7 text-sm text-gray-600">作曲家　</label>
                      <select name="composer_id" id="composer_id">
                        <option value="">ALL</option>
                        @foreach($composers as $composer)
                            <option value="{{ $composer->id }}" {{ request('composer_id') == $composer->id ? 'selected' : '' }}>{{ $composer->composer }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <!-- コントローラー側で選択された値をビューに渡す -->
                  {{-- {{ view()->share('composer_id', request('composer_id')) }} --}}

                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="song_id" class="leading-7 text-sm text-gray-600">曲名　　</label>
                      {{-- <select name="song" id="song" disabled>
                        <option value=""></option>
                      </select> --}}
                      <select name="song_id" id="song_id">
                        <option value="">ALL</option>
                        @foreach($songs as $song)
                            <option value="{{ $song->id }}" {{ request('song_id') == $song->id ? 'selected' : '' }}>{{ $song->song }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                </form>

                    <div class="lg:w-full w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th> --}}
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ユーザネーム</th> --}}
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ユーザID</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作曲家</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">曲名</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">体感難易度</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">必要度数</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏時間(リピート有)</th>
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">詳細</th> --}}
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pianologs as $pianolog)
                            <tr>
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->id }}</td> --}}
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->username }}</td> --}}
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->userid }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->composer }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->song }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->difficulty }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $pianolog->degree }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">
                                @if ($pianolog->playingtime === 1)1分以内
                                @elseif ($pianolog->playingtime === 2)2分以内
                                @elseif ($pianolog->playingtime === 3)3分以内
                                @elseif ($pianolog->playingtime === 4)4分以内
                                @elseif ($pianolog->playingtime === 5)5分以内
                                @elseif ($pianolog->playingtime === 6)6分以内
                                @elseif ($pianolog->playingtime === 7)7分以内
                                @elseif ($pianolog->playingtime === 8)8分以内
                                @elseif ($pianolog->playingtime === 9)9分以内
                                @elseif ($pianolog->playingtime === 10)10分以内
                                @endif
                              </td>
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3"><a  class="text-blue-500" href="{{ route('pianologs.show', ['id' => $pianolog->id ] )}}">詳細</a></td> --}}
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      {{ $pianologs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
