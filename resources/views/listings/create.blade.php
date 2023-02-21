

<x-layout title="Dodaj novi oglas">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row heading">
                    <h2>Objavi novi oglas</h2>
                <div class="card">
                    
                    <div class="card-body">
                        <form action="{{route('listings.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf


                            {{-- <div class="row mb-3">
                             <div class="col-md-12">
                              <img class="company-logo1" alt="logo" src="{{$listing->user->logoUrl()}}">
                             </div>
                            </div> --}}
   
               
                            <div class="row mb-3">
                            <div class="col-md-6">
                           <input type="text" name="title" id="title" value="{{ old('title')}}" class="form-control input-lg" placeholder="Naziv oglasa ">
                             @error('title')
                            <div>{{$message}}</div>
                            @enderror
                              </div>
                            </div>

                           {{--  <div class="row mb-3">
                                <div class="col-md-6">
                            <input type="text"  name="company" id="company" value="{{ old('company')}}" class="form-control input-lg" placeholder="Naziv firme ">
                            @error('company')
                            <div>{{$message}}</div>
                           @enderror
                                  </div>
                                </div>
 --}}

                                {{-- <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input type="text" name="address" id="address" value="{{ old('address')}}" class="form-control input-lg" placeholder="Adresa">
                                        @error('address')
                                        <div>{{$message}}</div>
                                        @enderror
                                      </div>
                                    </div> --}}

                                    
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input type="text" name="salary" id="salary" value="{{ old('salary')}}" class="form-control input-lg" placeholder="Plata">
                                          
                        @error('salary')
                        <div>{{$message}}</div>
                        @enderror
                                      </div>
                                    </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                       Spremi
                                    </button>
                                </div>
                            </div>
                
                    
                </form>
            </div>
        </div>
    </div>
</div>
</div>


</x-layout>