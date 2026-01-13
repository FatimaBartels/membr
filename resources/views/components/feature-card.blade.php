
<div class="col-md-4">
    <div class="card">    
            <h4 class="subTitle">{{ $title }}</h4>   

       <div class="subs">
            <img src="{{ $image }}" alt="" class="feature-img"> 
       </div>

        <div class="card-body">
            {{ $slot }}
        </div>

    </div>
</div>
 