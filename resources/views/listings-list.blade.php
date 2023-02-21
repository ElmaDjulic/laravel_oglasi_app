<x-layout title="Svi oglasi">
	<section class="main-banner" style="background:#242c36 url(img/cover.jpg) no-repeat">
        <div class="container">
            <div class="row justify-content-center">
              
                <div class="caption">
                <h2>Izgradi svoju karijeru </h2>
            </div>
                </div>
        </div>
        </div>
    </section>
  
    <section class="jobs">
        <div class="container">
            @if ($message=session('message'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{$message}}</strong>
              </div>
                @endif
            <div class="row heading">
                <h2>Oglasi za posao</h2>
                <p>Ukoliko tražite posao u na pravom ste mjestu.</p>
              
                <form>
                    
                    <div class="row">
                        <div class="col">
                   
                        <div class="col-md-6 col-sm-4 no-pad">
                            <input type="text" class="form-control " name="search" value="{{request()->query('search')}}" id="search-input" placeholder="Pretraži poslove"  aria-describedby="button-addon2">
                          
                      

                        <div >
                          
                            <div>
                            @if(request()->filled('search'))
                            <button class="btn seub-btn1"  type="button" onclick="document.getElementById('search-input').value='',this.form.submit() ">
                                <i class="fa fa-refresh"></i>
                              </button>
                          @endif
                            
                        
                            <button class="btn seub-btn" type="submit" id="button-addon2">
                             <i class="fa fa-search"></i>
                            </button> 
                        
                  
                            
                    </div></div>
                
                </form>
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
                                        @cannot('update', $listing)
                                        <div> <a href="{{route('listings.show', $listing->slug)}}" class="btn view-job" role="button" aria-pressed="true">Apliciraj</a></div>
                               
                                        
                                <div>
                                   @can('update',$listing)
                                    <a href="{{$listing->route('edit')}}" class="btn btn-lg btn-package " title="Edit"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('delete', $listing)
                                    <form action="{{ route('listings.destroy', $listing->id)  }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Jeste li sigurni?')"  class="btn  btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                        
                                    </form>
                                    @endcan
                                </div>
                                @endcannot
                            </span></h3> 
                            <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$listing->user->company}}</span><span class="company-location"><i class="fa fa-map-marker"></i>{{$listing->user->address}}</span><span class="package"><i class="fa fa-money"></i>{{$listing->salary}} €</span></p> 
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
               
                @endforeach
                
   
        </div>
        <div class="w-full md:w-2/3 flex flex-col items-center text-center" style="margin-left:28rem" >  {{$listings->links()}}</div>     
        </div>
    </section>



  <x-footer :listings="$listings" :users="$users"/>
		 
       
</x-layout>