<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            演奏者プロフィール一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  {{-- 検索ここから --}}
                    <form class="mb-8" method="get" action="{{ route('contacts.index') }}">
                      @csrf
                      {{-- <input type="hidden" id="id" name="id" value="1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> --}}
                      
                      {{-- <div class="form-group">
                        <label for="username">ユーザネーム</label>
                        <input type="text" name="username" class="form-control" value="{{ request('username') }}">
                      </div>

                      <div class="form-group">
                        <label for="userid">ユーザID</label>
                        <input type="text" name="userid" class="form-control" value="{{ request('userid') }}">
                      </div> --}}

                      <label for="age_id">年齢:</label>
                      <select name="age_id" id="age_id">
                          <option value="">All</option>
                          @foreach($ages as $age)
                              <option value="{{ $age->id }}" {{ request('age_id') == $age->id ? 'selected' : '' }}>{{ $age->age }}</option>
                          @endforeach
                      </select>
              
                      <label for="gender_id">性別:</label>
                      <select name="gender_id" id="gender_id">
                          <option value="">All</option>
                          @foreach($genders as $gender)
                              <option value="{{ $gender->id }}" {{ request('gender_id') == $gender->id ? 'selected' : '' }}>{{ $gender->gender }}</option>
                          @endforeach
                      </select>
                      {{-- <label for="status">Status:</label>
                      <select name="status" id="status">
                          <option value="">All</option>
                          <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                          <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                      </select> --}}


                      {{-- <input type="text" name="search" placeholder="検索"> --}}
                      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                    </form>

                    {{-- 検索ここまで --}}

                    <div class="lg:w-4/5 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th> --}}
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ユーザネーム</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ユーザID</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">年齢</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">性別</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ピアノ開始年齢</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏歴</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ピアノ所持</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">防音室所持</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">コミュニティ</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">詳細</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                              {{-- <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td> --}}
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->username }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->userid }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">                        
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
                              </td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">
                                @if ($contact->gender === 1)男性
                                @elseif ($contact->gender === 2)女性
                                @elseif ($contact->gender === 3)その他
                                @endif
                              </td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">                        
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
                              </td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">
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
                              </td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">
                                @if ($contact->pianohon === 1)グランドピアノ
                                @elseif ($contact->pianohon === 2)アップライトピアノ
                                @elseif ($contact->pianohon === 3)電子ピアノ
                                @elseif ($contact->pianohon === 4)キーボードその他
                                @elseif ($contact->pianohon === 5)所持なし
                                @endif
                              </td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">                        
                                @if ($contact->soundproofhon === 0)有
                                @elseif ($contact->soundproofhon === 1)無
                                @endif</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->community }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3"><a  class="text-blue-500" href="{{ route('contacts.show', ['id' => $contact->id ] )}}">詳細を見る</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
