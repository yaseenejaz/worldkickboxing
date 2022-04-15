<div class="tick-box">
    @foreach($descipline as $desciplines)
        <div class="rbx">
            <input type="checkbox" name="descipline[]" value="{{ $desciplines->id }}">
            <div class="rdo"></div>
            <label>{{ $desciplines->name }}</label>
        </div>
    @endforeach
</div>
