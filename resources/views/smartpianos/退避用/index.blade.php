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
                <label for="composer" class="leading-7 text-sm text-gray-600">作曲家　</label>
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
                <select name="song_id" id="song_id">
                  <option value=""></option>
                  @foreach($songs as $song)
                      <option value="{{ $song->id }}" {{ request('song_id') == $song->id ? 'selected' : '' }}>{{ $song->song }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            {{-- ジャンル、作品番号、楽章、調性 --}}
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">ジャンル　</label>
                <input type="text" id="name" name="name" class="w-2/5 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">第　　　</label>
                <input type="text" id="name" name="name" class="w-2/5 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">番
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">作品番号
                </label>
                <input type="text" id="name" name="name" class="w-2/5 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">楽章　　</label>
                <input type="text" id="name" name="name" class="w-2/5 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">調性　　</label>
                <input type="text" id="name" name="name" class="w-2/5 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
          </form>
        {{-- フォームここまで --}}

        {{-- 検索ボタン、演奏情報登録ボタン --}}
          <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">演奏情報検索</button>
          </div>
          <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-lime-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">演奏情報登録</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</x-app-layout>