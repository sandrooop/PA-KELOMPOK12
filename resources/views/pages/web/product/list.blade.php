<div class="row">
    @foreach ($products as $item)
        <div class="col-sm-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                {{-- <div class="text-center">
                    <p>Barang Terlaris: <b>
                            @if (isset($product))
                                {{ $product->nama }}
                            @endif
                        </b></p>

                </div> --}}

                <img class="card-img-top img-fluid" src="{{ asset('images/product/image/' . $item->image) }}"
                    style="height: 150px;" alt="Card image cap">
                <div class="card-body">
                    <h5 style="font-size: 1rem">
                        {{ $item->nama }}
                    </h5>
                    <small class="text-muted">
                        Stok : {{ $item->stock }}
                    </small>

                    <div class="text-end">
                        {{-- <a href="{{ route('web.product.show', $item->id) }}"
                            class="text-primary d-inline-block edit-item-btn">
                            <i class="ri-eye-fill fs-16">Detail</i>
                        </a> --}}
                        <div class="text-end">
                            <a href="javascript:;" onclick="load_detail('{{ route('web.product.show', $item->id) }}')"
                                class="btn btn-secondary">Detail</a>
                        </div>

                        {{-- <a href="javascript:;" onclick="load_detail('{{route('web.menu.show',$item->id)}}')" class="btn btn-secondary">Detail</a> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $products->links('theme.app.pagination') }} <br>
