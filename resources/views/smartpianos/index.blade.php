<x-app-layout>
  <x-slot name="header">
  <section class="text-gray-600 body-font relative">
    <div class="container px-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">ピアノ曲 演奏情報検索</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Let's go find performance information for your favorite piano piece!</p>
      </div>
    </div>
  </x-slot>
    <div class="lg:w-1/3 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        {{-- 検索項目 --}}
        <div class="px-20 py-5 w-full">
          {{-- フォームここから --}}
          <form class="mb-8" method="get" action="{{ route('smartpianos.index') }}">
            @csrf  
            <div class="p-2 w-full">
              <div class="relative">
                <label for="composer_id" class="leading-7 text-sm text-gray-600">作曲家　</label>
                <select name="composer_id" id="composer_id">
                  <option value=""></option>
                  @foreach($composers as $composer)
                      <option value="{{ $composer->id }}" {{ request('composer_id') == $composer->id ? 'selected' : '' }}>{{ $composer->composer }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="song_id" class="leading-7 text-sm text-gray-600">曲名　　</label>
                {{-- <select name="song" id="song" disabled>
                  <option value=""></option>
                </select> --}}
                <select name="song_id" id="song_id">
                  <option value=""></option>
                  @foreach($songs as $song)
                      <option value="{{ $song->id }}" {{ request('song_id') == $song->id ? 'selected' : '' }}>{{ $song->song }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            {{-- 検索ボタン、演奏情報登録ボタン --}}
            <div class="p-2 w-full">
              <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">演奏情報検索</button>
            </div>
            {{-- <div class="p-2 w-full">
              <button class="flex mx-auto text-white bg-lime-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">演奏情報登録</button>
            </div> --}}
          </form>

        </div>
      </div>
    </div>

  

  {{-- @if(request('composer') && request('song')) --}}
  {{-- @if(request('smartpiano')) --}}
    {{-- composerとsongが選択された場合に表示する --}}
    <div class="lg:w-2/5 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作曲家</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">曲名</th>
            </tr>
          </thead>
          <tbody>
            @foreach($smartpianos as $smartpiano)
            <tr>
              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $smartpiano->composer }}</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $smartpiano->song }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- @else
          <p class="text-gray-600">演奏情報はありません。</p> --}}
        {{-- @endif --}}
    </div>
  {{-- @endif --}}
</x-app-layout>