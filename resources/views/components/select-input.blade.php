<div class="{{ $colWidth }}">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select class="form-select @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}">
        {{ $slot }}
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
