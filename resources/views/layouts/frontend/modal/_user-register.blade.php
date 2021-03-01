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
                {{-- <form id="myForm" action="{{ route('register') }}" method="POST"> --}}
                {{-- <form id="myForm" action="javascript:void(0)" method="POST"> --}}
                <form>
                    {{-- @csrf --}}
                    {{ csrf_field() }}

                    <div class="form-group form-focus">
                        <label>What type of customer</label>
                        <select name="profetion" id="profetion1" class="form-control select">
                            {{--<option value="" style="display: none" selected>Select your profetion here...</option>
                            @foreach($provider_profetions as $profetion)
                                <option @if(old('profetion') == $profetion->id) selected @endif value="{{ $profetion->id }}"> {{ $profetion->name }} </option>
                            @endforeach--}}
                            <option value="" style="display: none" selected>Select customer here...</option>
                            <option>Normal User</option>
                            <option>Corporate User</option>
                        </select>
                        {{-- @error('profetion')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group form-focus">
                        <label for="name" class="focus-label">Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Your name">
                        {{-- @error('name')
                        <div class="text-danger" id="nameError">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group form-focus">
                        <label for="name" class="focus-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Your email">
                        {{-- @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group form-focus">
                        <label class="focus-label">Mobile Number</label>
                        <input type="text" id="phone" class="form-control" name="phone" placeholder="xxxxxxxx">
                        {{-- @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group form-focus">
                        <label class="focus-label">Create Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="********">
                        {{-- @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    {{--<div class="text-right">
                        <a class="forgot-link" href="index.html#">Already have an account?</a>
                    </div>--}}
                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <input type="checkbox" id="agreeCheckboxUser" class="custom-control-input" name="agreeCheckboxUser"
                                   id="agree_checkbox_user" value="1">
                            <label class="custom-control-label" for="agree_checkbox_user">I agree
                                to Mushkilasan</label> <a tabindex="-1" href="javascript:void(0);">Privacy
                                Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn login-btn btn-submit">Register</button>
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

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var profetion = $("input[name='profetion']").val();
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var password = $("input[name='password']").val();
            var agreeCheckboxUser = $("input[name='agreeCheckboxUser']").val();

            $.ajax({
                url: "/register",
                type:'POST',
                data: {
                    _token:_token, 
                    profetion:profetion,
                    name:name,
                    email:email, 
                    password:password, 
                    agreeCheckboxUser:agreeCheckboxUser
                    },
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                        // window.location.replace(data.url);
                    }else{
                        alert('data.error');
                        // printErrorMsg(data.error);
                    }
                }
            });
        });
        function printErrorMsg (msg) {
            // $(".print-error-msg").find("ul").html('');
            $(".error_msg").css('display','block');
            $("#first_name_err").append(msg['first_name']);
            $("#last_name_err").append(msg['last_name']);
            $("#email_err").append(msg['email']);
            $("#address_err").append(msg['address']);
            // $.each( msg, function( key, value ) {
            //     $(".print-error-msg").find("ul").append(key+'<li>'+value+'</li>');
            //     if(key=='first_name'){
            //     }
            // });
        }
    });


</script>
<!-- /User Register Modal -->
