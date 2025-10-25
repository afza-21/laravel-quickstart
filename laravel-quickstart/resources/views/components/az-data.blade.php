<td {{ $attributes->merge([
    'class' => 'px-3 py-2.5 whitespace-nowrap text-sm font-normal text-gray-800 dark:text-gray-200 text-start max-w-96 text-ellipsis truncate',
    ]) }}>
    {{ $slot }}
</td>