                      {{--  --}}
                      
                      <div class="form-group">
                        {{-- <div> --}}
                            <label for="">ユーザネーム
                            {{-- <div> --}}
                                <input type="text" name="username" value="aiueo">
                            {{-- </div> --}}
                            </label>
                        {{-- </div> --}}

                        {{-- <div> --}}
                          <label for="">ユーザID
                          {{-- <div> --}}
                              <input type="text" name="keyword" value="aiueo">
                          {{-- </div> --}}
                          </label>
                        {{-- </div> --}}

                        {{-- <div> --}}
                            <label for="">年齢
                            {{-- <div> --}}
                                <select name="medium" data-toggle="select">
                                    <option value="aiueo">全て</option>
                                    {{-- @foreach ($media_list as $media_item)
                                        <option value="{{ $media_item->getMedium() }}" @if($medium=='{{ $media_item->getMedium() }}') selected @endif>{{ $media_item->getMedium() }}</option>
                                    @endforeach --}}
                                </select>
                            {{-- </div> --}}
                            </label>
                        {{-- </div> --}}
        
                        {{-- <div> --}}
                            <label for="">性別
                            {{-- <div> --}}
                                <select name="" data-toggle="select">
                                    <option value="aiueo">全て</option>
                                    {{-- @foreach ($categories_list as $categories_item)
                                        <option value="{{ $categories_item->getCategory() }}" @if($category=='{{ $categories_item->getCategory() }}') selected @endif>{{ $categories_item->getCategory() }}</option>
                                    @endforeach --}}
                                </select>
                            {{-- </div> --}}
                            </label>
                        {{-- </div> --}}

                        {{-- <div> --}}
                          <label for="">ピアノ開始年齢
                          {{-- <div> --}}
                              <select name="" data-toggle="select">
                                  <option value="aiueo">全て</option>
                                  {{-- @foreach ($categories_list as $categories_item)
                                      <option value="{{ $categories_item->getCategory() }}" @if($category=='{{ $categories_item->getCategory() }}') selected @endif>{{ $categories_item->getCategory() }}</option>
                                  @endforeach --}}
                              </select>
                          {{-- </div> --}}
                          </label>
                        {{-- </div> --}}

                        <div class="form-group">
                          <label for="">演奏歴
                          {{-- <div> --}}
                              <select name="" data-toggle="select">
                                  <option value="aiueo">全て</option>
                                  {{-- @foreach ($categories_list as $categories_item)
                                      <option value="{{ $categories_item->getCategory() }}" @if($category=='{{ $categories_item->getCategory() }}') selected @endif>{{ $categories_item->getCategory() }}</option>
                                  @endforeach --}}
                              </select>
                          {{-- </div> --}}
                          </label>

                        {{-- <div> --}}
                          <label for="">ピアノ所持
                          {{-- <div> --}}
                              <select name="" data-toggle="select">
                                  <option value="aiueo">全て</option>
                                  {{-- @foreach ($categories_list as $categories_item)
                                      <option value="{{ $categories_item->getCategory() }}" @if($category=='{{ $categories_item->getCategory() }}') selected @endif>{{ $categories_item->getCategory() }}</option>
                                  @endforeach --}}
                              </select>
                          {{-- </div> --}}
                          </label>
                        {{-- </div> --}}

                        {{-- <div> --}}
                          <label for="">防音室所持
                          {{-- <div> --}}
                              <select name="" data-toggle="select">
                                  <option value="aiueo">全て</option>
                                  {{-- @foreach ($categories_list as $categories_item)
                                      <option value="{{ $categories_item->getCategory() }}" @if($category=='{{ $categories_item->getCategory() }}') selected @endif>{{ $categories_item->getCategory() }}</option>
                                  @endforeach --}}
                              </select>
                          {{-- </div> --}}
                          </label>
                        {{-- </div> --}}

                        {{-- <div> --}}
                          <label for="">所属コミュニティ
                          {{-- <div> --}}
                              <input type="text" name="keyword" value="aiueo">
                          {{-- </div> --}}
                          </label>
                        {{-- </div> --}}
                      </div>

                        {{-- <div> --}}
                            {{-- <input type="submit" class="btn" value="検索"> --}}
                        {{-- </div> --}}
                      </div>