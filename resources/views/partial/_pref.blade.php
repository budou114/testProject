<select>
  @foreach(config('pref') as $pref_id => $name)
    <option value="{{ $pref_id }}">{{ $name }}</option>
  @endforeach
</select>