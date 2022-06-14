<div class="space-y-12">
    @if ($initialVariation)
        <livewire:product-dropdown :variations="$initialVariation" />
    @endif

    @if ($skuVariant)
        <div class="space-y-12">

            <div class="font-semibol- text-lg">
                {{ $skuVariant->formattedPrice() }}
            </div>

            <x-button wire:click.prevent="addToCart">Add to Cart</x-button>
        </div>
    @endif
</div>
