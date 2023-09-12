<div
    @class([
        "flex items-center justify-between",
        "border-t border-white border-opacity-10 py-6 text-white" => $isLast ?? false,
])">
    <dt class="text-primary-200">
        {{ $title }}
    </dt>
    <dl class="text-secondary-300">
        {{ $value }}
    </dl>
</div>
