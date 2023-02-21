<x-layout title="Prijava na oglas">
 
    <div class="container" >
        <div class="row">
              <form action="{{route('listings.apply', $listing->slug)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                <h2>Prijava na oglas</h2>
                <h3 >Posao: {{$listing->title}}</h3>
                </div>
            
                <div style="margin-top:2rem; margin-bottom:1rem;">
                    <input type="text" name="first_name" id="title" value="{{ old('first_name')}}" class="form-control input-lg" placeholder="Ime ">
                    @error('first_name')
                    <div>{{$message}}</div>
                    @enderror
                </div>
            

                <div>
                    <input type="text"  name="last_name" id="last_name" value="{{ old('last_name')}}" class="form-control input-lg" placeholder="Prezime ">
                 @error('last_name')
                 <div>{{$message}}</div>
                @enderror
                </div>
                <div>
                    <input type="text" name="address" id="address" value="{{ old('address')}}" class="form-control input-lg" placeholder="Adresa">
                    @error('address')
                    <div>{{$message}}</div>
                    @enderror
                </div>

                <div >
                    <label >
                    <i class="fa fa-file"></i> Dodaj CV<input type="file" name="CV" id="CV" class="form-control input-lg" placeholder="CV ">
                </label>
                    @error('CV')
                    <div>{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Pošalji prijavu</button>
            </div>
              </form>
            </div>
        
        </div>
    </div>
</x-layout>