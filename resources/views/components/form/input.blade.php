@props(['name', 'placeholder' => ''])

<div class="form-group mb-2 mt-2">
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <input placeholder="{{ $placeholder }}" type="text" class="form-control" name="{{ $name }}">
</div>
