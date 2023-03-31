<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            マイピアノ演奏曲一覧
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
                    <a href="{{ route( 'mypianologs.create') }}" class="text-blue-500" >演奏曲新規登録</a>
                    {{-- <form class="mb-8" method="get" action="{{ route('mypianologs.index') }}">
                      <input type="text" name="search" placeholder="検索">
                      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                    </form> --}}

                    <div class="lg:w-full w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th> --}}
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ユーザネーム</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ユーザID</th> --}}
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作曲家</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">曲名</th>
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏時年齢</th> --}}
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">体感難易度</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">必要度数</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏時間(リピート有)</th>
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏時間(リピート無)</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">使用楽譜</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">譜読み期間</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">譜読みの進め方</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">難所</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">録音データ</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">URL</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">参考音源</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">参考書籍</th> --}}
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">詳細</th> --}}
                            </tr>
                          </thead>
                          <tbody>
                          @if (isset($mypianologs))
                            @foreach($mypianologs as $mypianolog)
                            <tr>
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->id }}</td> --}}
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->username }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->userid }}</td> --}}
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->composer }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->song }}</td>

                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">
                                @if ($mypianolog->playingage === 1)0～5歳
                                @elseif ($mypianolog->playingage === 2)6～9歳
                                @elseif ($mypianolog->playingage === 3)10～14歳
                                @elseif ($mypianolog->playingage === 4)15～18歳
                                @elseif ($mypianolog->playingage === 5)19～22歳
                                @elseif ($mypianolog->playingage === 6)23～30歳
                                @elseif ($mypianolog->playingage === 7)31～40歳
                                @elseif ($mypianolog->playingage === 8)41～50歳
                                @elseif ($mypianolog->playingage === 9)51～60歳
                                @elseif ($mypianolog->playingage === 10)61歳～
                                @endif
                              </td> --}}
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->difficulty }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->degree }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">
                                @if ($mypianolog->playingtime === 1)1分以内
                                @elseif ($mypianolog->playingtime === 2)2分以内
                                @elseif ($mypianolog->playingtime === 3)3分以内
                                @elseif ($mypianolog->playingtime === 4)4分以内
                                @elseif ($mypianolog->playingtime === 5)5分以内
                                @elseif ($mypianolog->playingtime === 6)6分以内
                                @elseif ($mypianolog->playingtime === 7)7分以内
                                @elseif ($mypianolog->playingtime === 8)8分以内
                                @elseif ($mypianolog->playingtime === 9)9分以内
                                @elseif ($mypianolog->playingtime === 10)10分以内
                                @endif
                              </td>
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">
                                @if ($mypianolog->playingtimenrp === 1)1分以内
                                @elseif ($mypianolog->playingtimenrp === 2)2分以内
                                @elseif ($mypianolog->playingtimenrp === 3)3分以内
                                @elseif ($mypianolog->playingtimenrp === 4)4分以内
                                @elseif ($mypianolog->playingtimenrp === 5)5分以内
                                @elseif ($mypianolog->playingtimenrp === 6)6分以内
                                @elseif ($mypianolog->playingtimenrp === 7)7分以内
                                @elseif ($mypianolog->playingtimenrp === 8)8分以内
                                @elseif ($mypianolog->playingtimenrp === 9)9分以内
                                @elseif ($mypianolog->playingtimenrp === 10)10分以内
                                @endif                              
                              </td> --}}
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->score }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">
                                @if ($mypianolog->readingperiod === 1)1週間以内
                                @elseif ($mypianolog->readingperiod === 2)2週間以内
                                @elseif ($mypianolog->readingperiod === 3)3週間以内
                                @elseif ($mypianolog->readingperiod === 4)4週間以内
                                @elseif ($mypianolog->readingperiod === 5)5週間以内
                                @elseif ($mypianolog->readingperiod === 6)6週間以内
                                @elseif ($mypianolog->readingperiod === 7)7週間以内
                                @elseif ($mypianolog->readingperiod === 8)8週間以内
                                @elseif ($mypianolog->readingperiod === 9)9週間以内
                                @elseif ($mypianolog->readingperiod === 10)10週間以内
                                @endif  
                              </td> --}}
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->exercise }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->technique }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->recording }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->url }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->soundsource }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $mypianolog->books }}</td> --}}
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3"><a  class="text-blue-500" href="{{ route('mypianologs.show', ['id' => $mypianolog->id ] )}}">詳細</a></td> --}}
                            </tr>
                            @endforeach
                            @else
                              <p>No contacts found.</p>
                            @endif
                          </tbody>
                        </table>
                      </div>
                      {{ $mypianologs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
