<!-- Login Modal -->
<div class="modal account-modal fade" id="login_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0 border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-header">
                    <h3>Login <span>Mushkilasan</span></h3>
                </div>
                {{-- <form action="{{route('user.login')}}" method="POST"> --}}
                <form>
                    {{ csrf_field() }}
                    <div class="form-group form-focus">
                        <label class="focus-label">Email</label>
                        <input name="logemail" type="email" class="form-control" placeholder="truelysell@example.com">
                        <div id="email_er" class="text-danger error_msg" style="display:none"></div>

                    </div>
                    <div class="form-group form-focus">
                        <label class="focus-label">Password</label>
                        <input name="logpassword" type="password" class="form-control" placeholder="********">
                        <div id="password_er" class="text-danger error_msg" style="display:none"></div>

                    </div>
                    <div class="text-right">
                    </div>
                    <button class="btn btn-primary btn-block btn-lg login-btn submitbtn">Login</button>
                    {{-- <div class="login-or">	<span class="or-line"></span>
                        <span class="span-or">or</span>
                    </div>
                    <div class="row form-row social-login">
                        <div class="col-6">	<a href="index.html#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                        </div>
                        <div class="col-6">	<a href="index.html#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                        </div>
                    </div> --}}
                    <br>
                    <br>
                    <div class="text-center dont-have">Don’t have an account? <a href="index.html#">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Login Modal -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $(".submitbtn").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var email = $("input[name='logemail']").val();
            var password = $("input[name='logpassword']").val();
            $.ajax({
                url: "{{route('user.login')}}",
                type:'POST',
                data: {

                    email:email,
                    password:password
                },
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        // alert(data.success);
                        if($.isEmptyObject(data.err_email)){

                            if($.isEmptyObject(data.err_password)){
                                alert(data.success);
                                window.location.replace(data.url);
                            }else{
                                console.log(data.err_password);
                                $(".error_msg").css('display','block');
                                $("#password_er").append(data.err_password);

                            }

                        } else{
                            console.log(data.err_email);
                            $(".error_msg").css('display','block');
                            $("#email_er").append(data.err_email);

                        }
                    }else{
                        console.log(data.error);
                        printErrorMsg(data.error);
                    }
                }
            });
        });
        function printErrorMsg (msg) {
            $(".error_msg").css('display','block');
            $("#email_er").append(msg['email']);
            $("#password_er").append(msg['password']);
        }
    });
</script>
