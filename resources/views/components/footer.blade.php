@props(['listings','users'])
<footer>
			
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-6 col-sm-6">
            <div class="counter-text">
                <span aria-hidden="true" class="icon-briefcase"></span>
                <h3>{{$listings->total()}}</h3>
                <p>Objavljenih oglasa</p>
            </div>
        </div>
         
        <div class="col-md-6 col-sm-3">
            <div class="counter-text">
                <span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>
                <h3>{{$users}}</h3>
                <p>Poslodavaca u potrazi za radnicima</p>
            </div>
        </div> 
        
    </div>
    </div>

</footer>