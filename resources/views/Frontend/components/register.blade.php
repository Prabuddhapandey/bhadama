<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Transparent Registration Form HTML CSS</title>
      <link rel="stylesheet" href="{{asset('asset/login/style.css')}}">
      <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}"/>
   </head>
   <body>

         

      <div class="bg-img">
         <div class="content">
            <header>Register</header>
            
         @if (session('success'))
         <div class="alert alert-success" role="alert">
             {{ session('success') }}
         </div>
     @endif

     @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
            <form action="{{route('store.user')}}" method="post">
               @csrf
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name="name" required placeholder="Name">
               </div>
               <div class="field">
                  <span class="fa fa-envelope"></span>
                  <input type="email" name="email" required placeholder="Email">
               </div>
               <div class="field">
                  <span class="fa fa-phone"></span>
                  <input type="tel" name="phone" required placeholder="Phone">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" name="password" class="pass-key" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" value="REGISTER">
               </div>
            </form>
           
            <div class="signup">
               Already have an account?
               <a href="{{url('/login')}}">Login Now</a>
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
h