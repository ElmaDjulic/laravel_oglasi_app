<x-layout title="Uredi oglas">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row heading">
                    <h2>Uredi oglas</h2>
                <div class="card">
                    
                    <div class="card-body">
                        <form action="{{$listing->route('update')}}" method="POST" >
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                               
                                <div class="col-md-12">
              
                                    
                                <img class="company-logo1" alt="logo" src="{{$listing->user->logoUrl()}}">
                                </div>
                            </div>
   
               
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Naziv oglasa</label>
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control input-lg" id="title" value="{{ old('title', $listing->title)}}">
                             @error('title')
                            <div>{{$message}}</div>
                            @enderror
                              </div>
                            </div>

                         {{--    <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Naziv firme</label>
                                <div class="col-md-6">
                                    <input type="text" name="company"  class="form-control input-lg" id="company" value="{{ old('company', $listing->user->company)}}">
                            @error('company')
                            <div>{{$message}}</div>
                           @enderror
                                  </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="title" class="col-md-4 col-form-label text-md-end">Adresa</label>
                                    <div class="col-md-6">
                                        <input type="text" name="address"  class="form-control input-lg" id="address" value="{{ old('address', $listing->address)}}">
                                        @error('address')
                                        <div>{{$message}}</div>
                                        @enderror
                                      </div>
                                    </div> --}}

                                    
                                <div class="row mb-3">
                                    <label for="title" class="col-md-4 col-form-label text-md-end">Iznos plate</label>
                                    <div class="col-md-6">
                                        <input type="text"   name="salary"  class="form-control input-lg" id="salary" value="{{ old('salary', $listing->salary)}}">
                                          
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
            </div></div>
        </div>
    </div>
</div>
</div>
    
</x-layout>


