<!-- Provider Register Modal -->
<div class="modal account-modal fade multi-step" id="provider-register" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0 border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-header">
                    <h3>{{ __('Join as a Professional') }}</h3>
                    <p class="text-muted">{{ __('Registration for profession') }}</p>
                </div>

                <!-- Register Form -->
                {{-- <form action="{{ route('register') }}" method="POST"> --}}
                <form>
                    {{ csrf_field() }}

                    <div class="form-group form-focus">
                        <label>What is your profetion?</label>
                        <select name="profetion1" id="profetion1" class="form-control select">
                            <option value="" style="display: none" selected>{{ __('Select your profession here...') }}</option>
                            @foreach($provider_profetions as $profetion)
                            @if($profetion->name != 'user' && $profetion->name != 'corporate')
                            <option @if(old('profetion') == $profetion->id) selected @endif value="{{ $profetion->id }}"> {{ $profetion->name }} </option>
                            @endif
                            @endforeach
                        </select>
                        <div id="profetion1_err" class="text-danger error_msg" style="display:none"></div>
                        {{-- @error('profetion')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group form-focus">
                        <label for="name" class="focus-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your name">
                        <div id="name_err" class="text-danger error_msg" style="display:none"></div>

                        {{-- @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group form-focus">
                        <label for="name" class="focus-label">{{ __('Email') }}</label>
                        <input type="email" class="form-control" name="email" placeholder="Your email">
                        <div id="email_err" class="text-danger error_msg" style="display:none"></div>

                        {{-- @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group form-focus">
                        <label class="focus-label">{{ __('Mobile Number') }}</label>
                        <input type="text" class="form-control" name="phone" placeholder="xxxxxxxx">
                        <div id="phone_err" class="text-danger error_msg" style="display:none"></div>

                        {{-- @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group form-focus">
                        <label class="focus-label">{{ __('Create Password') }}</label>
                        <input type="password" name="password" class="form-control" placeholder="********">
                        <div id="password_err" class="text-danger error_msg" style="display:none"></div>

                        {{-- @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    {{--<div class="text-right">
                        <a class="forgot-link" href="index.html#">Already have an account?</a>
                    </div>--}}
                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="agreeCheckboxUser"
                                   id="agree_checkbox_user1" value="1">
                            <label class="custom-control-label" for="agree_checkbox_user1">I agree
                                to Mushkilasan</label> <a tabindex="-1" href="javascript:void(0);">Privacy
                                Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
                        </div>

                    </div>
                    <div id="agreeCheckboxUser_err" class="text-danger error_msg" style="display:none"></div>
                    <div class="form-group">
                     <button class="btn login-btn btn-submit">{{ __('Register') }}</button>
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
<!-- /Provider Register Modal -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var profetion1 = $("select[name='profetion1']").val();
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var phone = $("input[name='phone']").val();
            var password = $("input[name='password']").val();
            var agreeCheckboxUser = $("input[name='agreeCheckboxUser']").val();
            $.ajax({
                url: "{{route('register')}}",
                type:'POST',
                data: {
                    _token:_token,
                    profetion1:profetion1,
                    name:name,
                    email:email,
                    phone:phone,
                    password:password,
                    agreeCheckboxUser:agreeCheckboxUser
                },
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                        window.location.replace(data.url);
                    }else{
                        console.log(data.error);
                        printErrorMsg(data.error);
                    }
                }
            });
        });
        function printErrorMsg (msg) {
            // $(".print-error-msg").find("ul").html('');

            $(".error_msg").css('display','block');
            $("#profetion1_err").append(msg['profetion1']);
            $("#name_err").append(msg['name']);
            $("#email_err").append(msg['email']);
            $("#phone_err").append(msg['phone']);
            $("#password_err").append(msg['password']);
            $("#agreeCheckboxUser_err").append(msg['agreeCheckboxUser']);
            // $.each( msg, function( key, value ) {
            //     $(".print-error-msg").find("ul").append(key+'<li>'+value+'</li>');
            //     if(key=='first_name'){
            //     }
            // });

        }
    });
</script>
