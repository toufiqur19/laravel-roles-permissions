@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-800 text-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
