<div class="form-group row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for="name">Name *</label>
                <input type="text" required class="form-control" name="name" value="{{ old('name', $item->name) }}"
                    placeholder="John Smith">
            </div>

            <div class="col-12 mt-3">
                <label for="name">Phone *</label>
                <input required class="form-control" name="phone" value="{{ old('phone', $item->phone) }}">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for="email">Email *</label>
                <input type="email" required class="form-control" name="email"
                    value="{{ old('email', $item->email) }}" placeholder="example@example.com">
            </div>
        </div>
        @if (!$item->exists)
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="new_password">New Password *</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter new password" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-eye" id="togglePassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_password">Confirm New Password *</label>
                        <div class="input-group">
                            <input type="password" name="password_confirmation" id="confirm_password"
                                class="form-control" placeholder="Confirm new password" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-eye" id="toggleConfirmPassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<script>
    // Function to toggle password visibility
    function togglePasswordVisibility(inputId, iconId) {
        var input = document.getElementById(inputId);
        var icon = document.getElementById(iconId);
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }

    // Event listener for toggling password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
        togglePasswordVisibility('password', 'togglePassword');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
        togglePasswordVisibility('confirm_password', 'toggleConfirmPassword');
    });
</script>
