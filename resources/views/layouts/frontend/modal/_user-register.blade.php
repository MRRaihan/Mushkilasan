<!-- User Register Modal -->
<div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0 border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-header">
                    <h3>Join as a User</h3>
                    <p class="text-muted">Registration for Customer</p>
                </div>

                <!-- Register Form -->
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="form-group form-focus">
                        <label>What type of customer</label>
                        <select name="profetion" id="profetion" class="form-control select">
                            {{--<option value="" style="display: none" selected>Select your profetion here...</option>
                            @foreach($provider_profetions as $profetion)
                                <option @if(old('profetion') == $profetion->id) selected @endif value="{{ $profetion->id }}"> {{ $profetion->name }} </option>
                            @endforeach--}}
                            <option value="" style="display: none" selected>Select customer here...</option>
                            <option>Normal User</option>
                            <option>Corporate User</option>
                        </select>
                        @error('profetion')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group form-focus">
                        <label for="name" class="focus-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your name">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group form-focus">
                        <label for="name" class="focus-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your email">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group form-focus">
                        <label class="focus-label">Mobile Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="xxxxxxxx">
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group form-focus">
                        <label class="focus-label">Create Password</label>
                        <input type="password" name="password" class="form-control" placeholder="********">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{--<div class="text-right">
                        <a class="forgot-link" href="index.html#">Already have an account?</a>
                    </div>--}}
                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="agreeCheckboxUser"
                                   id="agree_checkbox_user" value="1">
                            <label class="custom-control-label" for="agree_checkbox_user">I agree
                                to Mushkilasan</label> <a tabindex="-1" href="javascript:void(0);">Privacy
                                Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn login-btn">Register</button>
                    </div>
                    {{--<div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                    </div>
                    <div class="row form-row social-login">
                        <div class="col-6">
                            <a href="index.html#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                        </div>
                        <div class="col-6">
                            <a href="index.html#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                        </div>
                    </div>--}}
                    <div class="account-footer text-center">
                        Already have an account? <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#login_modal">Login</a>
                    </div>
                </form>
                <!-- /Register Form -->

            </div>
        </div>
    </div>
</div>
<!-- /User Register Modal -->