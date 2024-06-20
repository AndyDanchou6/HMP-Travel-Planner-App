<div class="modal fade" id="messages{{$user['referenceNo']}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryTitle">{{ $user['name'] }}'s purchases</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $user['phone'] }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fb_link" class="col-sm-2 col-form-label">Facebook Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $user['fb_link'] }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" readonly>{{ $user['address'] }}</textarea>
                    </div>
                </div>

                <div>
                    <h5>Purchased Item</h5>
                </div>
                @foreach($user['items'] as $item)


                <div class="row mb-3 item-row" data-item-id="{{ $item->id }}">
                    <label for="phone" class="col-sm-2 col-form-label">Item Name</label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{ $item->product_name }}" readonly>
                    </div>

                    <label for="phone" class="col-sm-2 col-form-label">Item Price</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control item-price" data-item-id="{{ $user['referenceNo'].'_'.$item->id }}" value="{{ $item->price }}" readonly>
                    </div>

                    <label for="phone" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control item-quantity" data-item-id="{{ $user['referenceNo'].'_'.$item->id }}" value="{{ $item->quantity }}" readonly>
                    </div>

                    <label for="phone" class="col-sm-2 col-form-label">SubTotal</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control item-sub-total" data-item-id="{{ $user['referenceNo'].'_'.$item->id }}" value="0" readonly>
                    </div>

                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                @endforeach
                <div class="modal-footer">
                    <label for=" grossTotal" class="col-sm-1 col-form-label">Total</label>
                    <div class="col-sm-3">
                        <input type="text" name="total" class="form-control purchase-total" data-total-id="{{ $user['referenceNo'] }}" readonly>
                    </div>
                    <label for="reference" class="col-sm-3 col-form-label">Reference No.</label>
                    <div class="col-sm-3">
                        <input type="text" name="reference" class="form-control" value="{{ $user['referenceNo'] }}" readonly>
                    </div>

                    <div class="col-sm-3" style="margin-top: 30px;">
                        <input type="text" class="form-control" value="{{ ucwords($item->order_retrieval) }}" readonly>
                    </div>

                    <form action="{{ route('selected-items.update', ['referenceNo' => $user['referenceNo']]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-outline-primary" style="margin-top: 26px;">Finished</button>
                    </form>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="margin-top: 30px;">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>