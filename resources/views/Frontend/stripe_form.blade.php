@extends('layout.app')

@section('main')

<div class="container">
    <div class="col-8">
        <h2 class="mb-4 pt-4" style="padding-left:40px;">Payment Detail</h2>
        <div class="mb-5">
            <div class="container-fluid pb-5">
                <form class="container" id="payment-form">
                    @csrf
                    <div class='col-6 form-row'>
                        <label class='control-label'>Card Number</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text' name="card_no">
                    </div>
                    <input type="hidden" name="status" value="paid">
                    <div class='col-6 form-row mt-2'>
                        <div class='col-xs-4 form-group cvc required'>
                            <label class='control-label'>CVV</label>
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvvNumber">
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'>Expiration</label>
                            <input class='form-control card-expiry-month' placeholder='MM' size='4' type='text' name="ccExpiryMonth">
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'> </label>
                            <input class='form-control card-expiry-year mt-2' placeholder='YYYY' size='4' type='text' name="ccExpiryYear">
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='hidden' name="amount" value="300">
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'> </label>
                        </div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control p-4 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email', $mail) }}" >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6 form-group">
                        <label for="amount">Amount (in cents):</label>
                        <input type="text" name="amount" class="form-control p-4 @error('amount') is-invalid @enderror" placeholder="Amount" value="{{ old('amount', $data) }}" readonly>
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                    <button type="submit" class="btn btn-info ml-3" id="submit-payment">Submit Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Stripe JS -->
<script src="https://js.stripe.com/v3/"></script>
<script>
$(document).ready(function() {
    $('#payment-form').on('submit', function(e) {
        e.preventDefault();
        let form = $(this);
        $.ajax({
            url: '{{ route("stripe.charge") }}',
            method: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.success) {
                    alert('Payment was successful');
                    // Redirect or update the page
                    window.location.href = '/';
                } else {
                    alert('Payment failed: ' + response.error);
                }
            },
            error: function(response) {
                let errorMessage = 'Payment failed. Please check if the fields are empty or contain invalid data.';
                if (response.responseJSON && response.responseJSON.error) {
                    errorMessage = response.responseJSON.error;
                } else if (response.responseText) {
                    errorMessage = response.responseText;
                }
                alert(errorMessage);
                console.log(response);
            }
        });
    });
});

</script>
@endsection
