

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Transparent Login Form HTML CSS</title>
      <link rel="stylesheet" href="{{asset('asset/login/style.css')}}">
      <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}"/>
   </head>
   <body>
      <div class="bg-img">
         <div class="content">
            <header>Login Form</header>
            <form action="{{ route('login') }}" method="post">
               @csrf
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name="email_or_phone" value="{{ old('email_or_phone') }}" required placeholder="Email or Phone">
                  @error('email_or_phone')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>
              <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" name="password" required placeholder="Password">
                  <span class="show" onclick="togglePassword()">SHOW</span>
                  @error('password')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" value="LOGIN">
               </div>
            </form>
           
            <div class="signup">
               Don't have account?
               <a href="{{url('/registers')}}">Signup Now</a>
            </div>
         </div>
      </div>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>
   </body>
</html>
