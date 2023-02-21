<x-layout title="Prikaz prijava">
    <section class="jobs">
        <div class="container">
          
            <div class="row heading">
                <h2>Prikaz prijava</h2>    
            </div>
            <div class="companies">
                @foreach($clicks as $click)
                <div class="company-list">
                    <div class="row">
                        <div class="col-md-10 col-sm-10">
                            <div class="company-content">
                                <h3>{{$click->first_name}} {{$click->last_name}} 
                                  </h3>
                                <p><span>Adresa: {{$click->address}}</span></p>
                                <p><a href="#">CV: {{$click->CV}}  </a></p>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
               
                @endforeach  
        </div>
        </div>
    </section>
   
</x-layout>
