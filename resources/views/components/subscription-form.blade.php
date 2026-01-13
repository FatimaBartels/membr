  @if(session('success')) <!--success message -->
    <p style="color: rgb(145, 240, 145);">{{ session('success') }}</p>
    @endif

    @if ($errors->any()) <!--validation error -->
    <ul style="color:rgb(134, 3, 3);">
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>      
        @endforeach
    </ul>
    @endif

  <form method="POST" action="/subscribes"> <!--form post input to database -->

        @csrf <!--protection  -->
        <div>
           
        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your name"/>
        </div>
        <div>
          
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"/>
        </div>
        <button type="submit" class="subscribebtn">Subscribe Now</button>
    </form>