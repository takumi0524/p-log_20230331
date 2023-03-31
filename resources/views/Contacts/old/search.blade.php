<form method="POST" action="{{ url('/search') }}">
    @csrf
    <div>
        <label for="username">ユーザ名</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}">
    </div>
    <div>

    <div>
        <label for="userid">ユーザID</label>
        <input type="text" name="userid" id="userid" value="{{ old('userid') }}">
    </div>

    <div>
        <label for="age">年齢</label>
        <select name="age" id="age">
            <option value="">選択してください</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
    </div>

    <div>
        <label for="gender">性別</label>
        <select name="gender" id="gender">
            <option value="">選択してください</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
    </div>

    <div>
        <button type="submit">検索</button>
    </div>
</form>

@if (isset($contacts))
    <table>
        <thead>
            <tr>
                <th>ユーザ名</th>
                <th>ユーザID</th>
                {{-- <th>価格</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->username }}</td>
                    <td>{{ $contact->userid }}</td>
                    {{-- <td>{{ $contact->price }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
