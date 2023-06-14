@extends('layouts.main')

<style>
    body {
margin: 0;
padding: 0;

}

#main-img-display{
        max-width: 100%;
        height: auto;
    }
.card .blogs p,h5{
    color: black;
}
/* .card .blogs .person{
   
   height: 65px;
} */
.card .blogs p,h5:hover{
    color: red;
    transition: 1ms ease-in-out;
}
.bottom-container div p{
/* display: flex;
justify-content: space-between; */
/* border: 2px solid black
 */
 display: flex;
 float: left;
 
}
.bottom-container div img{
/* display: flex;
justify-content: space-between; */
/* border: 2px solid black
 */
 display: flex;
 float: right;
 
}
</style>
@section('main-section')
<div class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-black-alpha.png')}}" id="main-img-display" class="image-fluid">
            </div>
        </div>
    </div>
    <div id="app" class="container-fluid">
        {{-- <div class="grid"> --}}
            <div class="row">
            @for ($i = 0; $i < 6; $i++)
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" >
                    <img class="card-img-top" src="{{url('images/blogs.jpg')}}" alt="Card image cap">
                    <div class="card-body blogs">
                        <h5 class="card-title">The best of The Correspondent - recommended by the people who made the stories</h5>
                        <div class="bottom-container">
                            <p class="card-title" >Aliza Anyangwe</p>
                            <img src="{{url('images/persons.png')}}" class="person" alt="" >
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            </div>
            
            
        {{-- </div> --}}
    </div>  
</div>



      
   
      
     
     

    
<script>
   
   </script>
@endsection