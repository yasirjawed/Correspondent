@extends('layouts.main')

<style>
    #main-img-display{
        max-width: 100%;
        height: auto;
    }
    .card-img{
        width: auto;
        height: auto;
    }
    .read-all-stories-btn{
        width: 100%;
        color: black;
        background-color: #fff;
        border: 1px solid black;
    }
    .read-all-stories-btn span:hover{
       color:red;
    }
    .cards-classes{
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .card-boxes{
        margin-top:12px; 
    }
    .main-topic-section{
        background-color: #9ececa;
        height: 250px;
    }
    .paragraph-main-hero-section{
        display: flex;
        justify-content: center;
    }
</style>
@section('main-section')
<div class="main">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cards-classes p-0">
        <button type="button" class="btn btn-primary btn-lg corres-btn" style="width:100%;background-color: #9ececa;border:none;border-radius: 0 0 0 0;color:black;height:80px">Correspondents</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cards-classes p-0">
        <button type="button" class="btn btn-primary btn-lg news-btn" style="width:100%;background-color:#8bb5b1;border:none;border-radius: 0 0 0 0;color:black;height:80px">This Newsroom</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cards-classes p-0">
        <button type="button" class="btn btn-primary btn-lg story-btn" style="width:100%;background-color:#8bb5b1;border:none;border-radius: 0 0 0 0;color:black;height:80px">Guest Storytellers</button>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" id="corres-section-main">
        <div class="main-topic-section">
            <div class="heading-main-hero-section">
                <h1 style="color: white">Correspondents</h1>
            </div>
            <div class="paragraph-main-hero-section">
                <p style="font-size:20px;width:50%;text-align:center;" >All correspondents have their own beat and expertise. Follow your favourite correspondent, and you'll see all their stories and updates on your feed.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" id="news-section-main" style="display: none">
        <div class="main-topic-section">
            <div class="heading-main-hero-section">
                <h1 style="color: white">The newsroom</h1>
            </div>
            <div class="paragraph-main-hero-section">
                <p style="font-size:20px;width:50%;text-align:center;" >Meet the people who make The Correspondent’s journalism possible on a daily basis. Curious who else contributes to making The Correspondent happen? Take a look at thecorrespondent.com/people.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" id="story-section-main" style="display: none">
        <div class="main-topic-section">
            <div class="heading-main-hero-section">
                <h1 style="color: white">Guests</h1>
            </div>
            <div class="paragraph-main-hero-section">
                <p style="font-size:20px;width:50%;text-align:center;" >Correspondents regularly collaborate with guests who are invited to share their expertise on transnational topics, ranging from science and technology to pop culture and lived experience. Below you'll find an overview of all authors.</p>
            </div>
        </div>
    </div>
    </div>
   <div class="correspondent-div"  style="">
    <div class="row">
        @for ($i = 0; $i < 12; $i++)
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 p-1">
            <div class="card card-boxes" style="width: 21rem;">
                <img class="card-img-top card-img" src="{{url('images/corres.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Eric Halthaus</h5>
                  <h5 class="card-title"><b>Climate Correspondent</b></h5>
                  <p class="card-text">Eric Holthaus is a meteorologist but has worked as a climate scientist and journalist for 15 years mostly in the US, the Caribbean, and East Africa. He now lives in Minnesota. Languages: English and Spanish. (He/him)</p>
                  <a href="#" class="btn read-all-stories-btn"><span>All Stories &emsp;<i class="fa-solid fa-chevron-right" style="color: black"></i></span></a>
                </div>
              </div>
        </div>
        @endfor
        </div>
    </div>

     <div class="newsroom-div" style="display:none">
    <div class="row">
        @for ($i = 0; $i < 12; $i++)
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
            <div class="card card-boxes" style="width: 21rem;">
                <img class="card-img-top card-img" src="{{url('images/use-2.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Irene Caselli</h5>
                  <h5 class="card-title"><b>1st 1,000 days correspondent</b></h5>
                  <p class="card-text">Irene Caselli has been a multimedia reporter for 15 years, between Europe and Latin America. She was the BBC correspondent in Venezuela when Hugo Chávez died, and her work has appeared in the Washington Post, The Guardian, El País and others. She produced a half-hour documentary on women’s football and gender inequality. Languages: Italian, English, Spanish, German, French and Portuguese. (She/her)</p>
                  <a href="#" class="btn read-all-stories-btn"><span>All Stories &emsp;<i class="fa-solid fa-chevron-right" style="color: black"></i></span></a>
                </div>
              </div>
        </div>
        @endfor
        </div>
    </div>

     <div class="story-div" style="display:none">
    <div class="row">
        @for ($i = 0; $i < 12; $i++)
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
            <div class="card card-boxes" style="width: 21rem;">
                <img class="card-img-top card-img" src="{{url('images/use-3.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Sanne Blau</h5>
                  <h5 class="card-title"><b>Numeracy Coresspondent</b></h5>
                  <p class="card-text"> Sanne holds a PhD in Econometrics from the Erasmus School of Economics. As the Numeracy correspondent, she explores the world of numbers and how they affect our lives. She is the author of the Dutch bestseller "The Number Bias".</p>
                  <a href="#" class="btn read-all-stories-btn"><span>All Stories &emsp;<i class="fa-solid fa-chevron-right" style="color: black"></i></span></a>
                </div>
              </div>
        </div>
        @endfor
        </div>
    </div>
</div>

<script>
    $('.corres-btn').click(function(){
        console.log('hello');
     
        $('.corres-btn').css({
            'background-color':'#9ececa'
        });
        $('.news-btn').css({
            'background-color':'#8bb5b1'
        });
        $('.story-btn').css({
            'background-color':'#8bb5b1'
        });
        $('#corres-section-main').css({
            'display':''
        });
        $('#news-section-main').css({
            'display':'none'
        });
        $('#story-section-main').css({
            'display':'none'
        });
        $('.correspondent-div').css({
            'display':''
        });
        $('.newsroom-div').css({
            'display':'none'
        });
        $('.story-div').css({
            'display':'none'
        });
    });

    $('.news-btn').click(function(){
        console.log('hello');
        $('.news-btn').css({
            'background-color':'#9ececa'
        });
        $('.corres-btn').css({
            'background-color':'#8bb5b1'
        });
        $('.story-btn').css({
            'background-color':'#8bb5b1'
        });
        $('#news-section-main').css({
            'display':''
        });
        $('#corres-section-main').css({
            'display':'none'
        });
        $('#story-section-main').css({
            'display':'none'
        });
        $('.newsroom-div').css({
            'display':''
        });
        $('.correspondent-div').css({
            'display':'none'
        });
        $('.story-div').css({
            'display':'none'
        });
    });

    $('.story-btn').click(function(){
        console.log('hello');
        $('.story-btn').css({
            'background-color':'#9ececa'
        });
        $('.corres-btn').css({
            'background-color':'#8bb5b1'
        });
        $('.news-btn').css({
            'background-color':'#8bb5b1'
        });
        $('#story-section-main').css({
            'display':''
        });
        $('#corres-section-main').css({
            'display':'none'
        });
        $('#news-section-main').css({
            'display':'none'
        });
        $('.story-div').css({
            'display':''
        });
        $('.correspondent-div').css({
            'display':'none'
        });
        $('.newsroom-div').css({
            'display':'none'
        });
    });
    
</script>
@endsection

    
