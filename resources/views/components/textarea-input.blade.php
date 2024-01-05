@props(['colWidth', 'name', 'label', 'value' => ''])

<div class="{{ $colWidth }}">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @endif
    <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }}</textarea>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
