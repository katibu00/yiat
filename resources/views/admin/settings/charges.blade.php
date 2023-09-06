@extends('admin.layout.app')
@section('pageTitle', 'Charges')

@section('content')
    <main id="main-container">
        <div class="content">
            <div class="row">
                <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Charges Configuration</h5>
                    </div>
                    <div class="card-body">
                        <form id="chargesForm">
                            <div class="mb-3">
                                <label for="chargesPerChat" class="form-label">Charges per Chat</label>
                                <input type="number" class="form-control" id="chargesPerChat" name="charges_per_chat"
                                    value="{{ $charges->charges_per_chat ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="welcomeBonus" class="form-label">Welcome Bonus</label>
                                <input type="number" class="form-control" id="welcomeBonus" name="welcome_bonus"
                                    value="{{ $charges->welcome_bonus ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="referralBonus" class="form-label">Referral Bonus</label>
                                <input type="number" class="form-control" id="referralBonus" name="referral_bonus"
                                    value="{{ $charges->referral_bonus ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        $(function() {
            // Handle form submission
            $('#chargesForm').submit(function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: '',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log(response.message);
                        // Handle success response
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        // Handle error response
                    }
                });
            });
        });
    </script>
@endsection
