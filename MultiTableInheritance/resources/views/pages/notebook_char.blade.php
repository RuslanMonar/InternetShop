@extends('pages.show')
@section('characteristics')

<div class="m-bot15"> <strong>Memory : </strong> <span class="amount-old">{{ $product->productable->memory }}
</span>
</div>
<div class="m-bot15"> <strong>Graphics_card : </strong> <span
class="amount-old">{{ $product->productable->Graphics_card }} </span></div>
<div class="m-bot15"> <strong>RAM : </strong> <span class="amount-old">{{ $product->productable->RAM }}
</span>
</div>
<div class="m-bot15"> <strong>RAM_type : </strong> <span
class="amount-old">{{ $product->productable->RAM_type }} </span></div>
<div class="m-bot15"> <strong>Processor : </strong> <span class="amount-old">{{ $product->productable->Processor }}
<div class="m-bot15"> <strong>OperatingSystem : </strong> <span class="amount-old">{{ $product->productable->OperatingSystem }}
</span>
</div>


@endsection
