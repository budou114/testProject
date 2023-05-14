<select>
  @foreach(config('pref') as $pref_id => $name)
    <option value="{{ $pref_id }}" {{ $prefId === $pref_id ? "selected" : ""}}>{{ $name }}</option>
  @endforeach
</select>