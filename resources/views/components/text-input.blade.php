@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-hijau-300 focus:ring-hijau-300 rounded-md shadow-sm']) }}>
