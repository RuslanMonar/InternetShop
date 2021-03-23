@extends('pages.show')
@section('characteristics')

<div class="m-bot15"> <strong>Internet : </strong> <span class="amount-old">{{ $product->productable->internet }}
</span>
</div>
<div class="m-bot15"> <strong>SIM_quantity : </strong> <span
class="amount-old">{{ $product->productable->SIM_quantity }} </span></div>
<div class="m-bot15"> <strong>SIM_size : </strong> <span class="amount-old">{{ $product->productable->SIM_size }}
</span>
</div>
<div class="m-bot15"> <strong>OperatingSystem : </strong> <span
class="amount-old">{{ $product->productable->OperatingSystem }} </span></div>
<div class="m-bot15"> <strong>Processor : </strong> <span class="amount-old">{{ $product->productable->Processor }}
</span>
</div>


@endsection
