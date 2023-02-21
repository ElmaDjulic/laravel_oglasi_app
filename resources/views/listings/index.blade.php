
                       
<x-layout title="Moji oglasi">

    <section class="jobs">
        <div class="container">
            @if ($message=session('message'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{$message}}</strong>
              </div>
                @endif
            <div class="row heading">
                <h2>Moji oglasi </h2>
                <p>Broj objavljenih oglasa: {{$listings->count()}}</p>
            
                
            </div>
            <div class="companies">
                @foreach($listings as $listing)
                <div class="company-list">
                   
                    <div class="row">
                       
                        <div class="col-md-2 col-sm-2">
                            <div class="company-logo">
                                <img src="{{$listing->user->logoUrl()}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <div class="company-content">
                                <h3>{{$listing->title}}
                                    <span>
                                                         
                                <div>
                                    <a href="{{$listing->route('edit')}}" class="btn btn-lg btn-package " title="Uredi"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('listings.destroy', $listing->id)  }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Jeste li sigurni?')"  class="btn  btn-sm btn-circle btn-outline-danger" title="Izbriši"><i class="fa fa-trash"></i></button>
                                        
                                    </form>
                                
                                </div>
                             
                               
                            </span></h3>
                                <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$listing->user->company}}</span><span class="company-location"><i class="fa fa-map-marker"></i>{{$listing->user->address}}</span><span class="package"><i class="fa fa-money"></i>{{$listing->salary}} €</span></p>
                                <p><span>Broj prijava: {{$listing->clicks()->count()}}</span></p>
                                <p><a href="{{route('listings.application')}}">  Vidi sve prijave za ovaj oglas </a></p>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
               
                @endforeach
                  <div class="w-full md:w-2/3 flex flex-col items-center text-center" >  {{$listings->links()}}</div>     
      
        </div>
        </div>
    </section>


       
</x-layout>







                       

            
                
                
                               
                    
                               
                       