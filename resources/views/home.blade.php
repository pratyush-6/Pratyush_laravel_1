@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<style>
    

.time{
  color:#fff;
  font-size:30px;
  font-family: 'Staatliches', cursive;
  letter-spacing:.2em;
  margin-bottom:0px;
  text-align:center;
}
* {
  box-sizing: border-box;
}

body {
  --base-purple: #6D5BA3;
  --dark-purple: #4A2756;
  --light-purple: #8582CE;
  --darkest-purple: #643D82;
  --pink-white: #E5A0D1;
  --dark-pink: #EC6597;
  --cream: #FFE7C3;
  --orange: #FFB2B4;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: var(--dark-purple);
  transition: background .3s ease;
  
  &.light-version {
    --base-purple: #fff;
    --dark-purple: #92dadd;
    --light-purple: #BCF4F9;
    --darkest-purple: #dcfcff;
    --pink-white: #fff;
    --white: #FF9289;
    --dark-pink: #FFC3AF;
    --cream: #FF9289;
    --orange: #f16029;
    
    .house-front-lights {
      display: none;
    }
    
    .xmas-tree {
      background: #3D9A9E;
    }
    
    .moon {
      top: 98px;
      left: 63px;
      width: 30px;
      height: 30px;
      background: var(--cream);
      box-shadow: none;
    }
    
    .chimney:before {
      background-color: #dc548c;
      background-image: linear-gradient(90deg, transparent 50%, var(--dark-pink) 50%);
    }
  }
}

.container {
  position: relative;
  width: 350px;
  height: 350px;
}

.base {
  position: absolute;
  left: 50%;
  width: 298px;
  height: 85px;
  transform: translate(-50%, -68px) perspective(10px) rotatex(2deg);
  border: 5px solid var(--base-purple);
  border-radius: 0 0 30px 30px;
  background: var(--dark-purple);
  transition: all .3s ease;
 
}

.globe {
  position: relative;
  overflow: hidden;
  width: 350px;
  height: 350px;
  border: 5px solid var(--base-purple);
  border-radius: 50%;
  background: var(--base-purple);
  box-shadow: inset 0 0 0 10px var(--dark-purple);
  transition: all .3s ease;
}

.trees {
  position: absolute;
  bottom: -492px;
  left: -104px;
  width: 140px;
  height: 485px;
  transform: rotate(70deg) skew(50deg);
  border-radius: 10px;
  background: var(--darkest-purple);
  box-shadow: -39px 39px var(--dark-purple),
              65px -70px var(--darkest-purple),
              96px -110px var(--darkest-purple),
              243px -186px var(--darkest-purple),
              318px -211px var(--darkest-purple),
              341px -235px var(--dark-purple);
  transition: all .3s ease;

  &:before {
    content: '';
    position: absolute;
    top: 30px;
    left: 15px;
    width: 5px;
    height: 5px;
    transform: skew(-50deg);
    border-radius: 50%;
    background: var(--light-purple);
    box-shadow: -12px -19px 0 1px rgba(#8582CE, .4),
                -15px -70px 0 1px rgba(#8582CE, .4),
                -29px -87px var(--light-purple),
                -51px -131px var(--light-purple),
                4px -201px var(--light-purple),
                21px -204px var(--light-purple),
                59px -222px var(--light-purple),
                75px -233px 0 rgba(#8582CE, .4),
                92px -224px var(--light-purple);
  }
}

.stars {
  position: absolute;
  top: 154px;
  left: 33px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--light-purple);
  box-shadow: 68px -73px var(--light-purple),
              80px -113px var(--dark-purple),
              193px -64px var(--pink-white),
              245px -19px var(--light-purple),
              54px 7px 0 -1px var(--light-purple),
              24px -29px 0 2px var(--pink-white),
              101px -98px 0 -1px var(--pink-white),
              212px -80px 0 -1px var(--dark-purple),
              253px -64px 0 -1px var(--light-purple),
              229px -51px 0 -1px #fff;
  transition: all .3s ease;
}

.moon {
  position: absolute;
  top: 80px;
  left: 68px;
  width: 40px;
  height: 40px;
  transform: rotate(145deg);
  border-radius: 50%;
  background: var(--base-purple);
  box-shadow: inset -10px 0 var(--cream);
  transition: all .3s ease;
}

.xmas-tree {
  position: absolute;
  bottom: 0;
  left: 45px;
  width: 100px;
  height: 150px;
  border-radius: 10px;
  background: var(--light-purple);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  transition: background .3s ease;

  &:before {
    content: '';
    position: absolute;
    top: 20px;
    left: 50%;
    width: 140px;
    height: 4px;
    transform: translatex(-50%) rotate(20deg);
    background: #E8A1D0;
    box-shadow: 0 20px 0 #E8A1D0,
                0 40px 0 #E8A1D0,
                0 60px 0 #E8A1D0;
  }

  &:after {
    content: '';
    position: absolute;
    top: 31px;
    left: 51px;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: var(--orange);
    box-shadow: -7px 18px 0 1px #FE78A4,
                9px 27px 0 #6D5CA4,
                -14px 38px 0 #fff,
                4px 44px 0 2px var(--orange),
                -22px 55px 0 #6D5CA4,
                -4px -22px 0 -1px #fff;
  }
}

.roof {
  position: absolute;
  right: 83px;
  bottom: 55px;
  width: 78px;
  height: 130px;
  transform: skew(22deg);
  border-radius: 0 3px 0 0;
  background: var(--light-purple);
  transition: background .3s ease;

  .chimney {
    position: absolute;
    top: -20px;
    left: 60%;
    width: 12px;
    height: 70px;
    transform: translatex(-50%) skew(-22deg);
    background-color: #DB548B;
    background-image: linear-gradient(transparent 50%, lighten(#973F71, 10) 50%);
    background-size: 10px 10px;
    transition: all .3s ease;

    &:after {
      content: '';
      position: absolute;
      left: -8px;
      width: 8px;
      height: 70px;
      background-color: #F872A0;
      background-image: linear-gradient(transparent 50%, var(--dark-pink) 50%);
      background-size: 10px 10px;
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 70%);
      transition: all .3s ease;
    }

    &:before {
      content: '';
      position: absolute;
      top: -5px;
      left: 20%;
      width: 30px;
      height: 5px;
      transform: translatex(-50%);
      background-color: #D8D8D8;
      background-image: linear-gradient(90deg, transparent 50%, var(--pink-white) 50%);
      background-size: 10px 10px;
      transition: all .3s ease;
    }
  }

  .chimney-shadow {
    position: absolute;
    top: 42px;
    left: 27px;
    width: 30px;
    height: 15px;
    transform: skew(5deg);
    background: var(--darkest-purple);
    transition: background .3s ease;
  }
}

.chimney-smoke {
  position: absolute;
  top: -146px;
  left: -10px;
  transform: skew(-22deg);
  
  path:not(.smoke-line) {
    fill: var(--light-purple);
  }
  
  .smoke-line {
    stroke: var(--light-purple);
  }
}

.house-front {
  position: absolute;
  bottom: 0;
  left: 73px;
  width: 160px;
  height: 185px;
  background: var(--pink-white);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  transition: background .3s ease;

  &:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 6px;
    width: 148px;
    height: 172px;
    background-color: #FE78A4;
    background-image: linear-gradient(transparent 50%, var(--dark-pink) 50%);
    background-size: 10px 10px;
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    transition: all .3s ease;
  }
}

.house-front-shadow {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 60px;
  width: 4px;
  height: 119px;
  transform: skew(-23deg);
  border-radius: 10px 52px 0 0;
  background: var(--dark-purple);
  box-shadow: 4px 3px 0 2px rgba(#4A2756, .25);
  
  &:before {
    content: '';
    background: var(--pink-white);
    width: 27px;
    height: 4px;
    position: absolute;
    top: 15px;
    right: -16px;
    transform: rotate(49deg);
  }
}

.house-front-lights {
  position: absolute;
  z-index: 1;
  top: 7px;
  left: 50%;
  width: 5px;
  height: 5px;
  transform: translatex(-50%);
  border-radius: 50%;
  background: #fff;
  box-shadow: 5px 9px #fff, 10px 20px #fff,
              15px 33px #fff, 20px 45px #fff,
              25px 56px #fff, 30px 67px #fff,
              35px 78px #fff, 41px 92px #fff,
              -52px 92px #fff, -47px 105px #fff,
              -42px 93px #fff, -37px 81px #fff,
              -31px 68px #fff, -26px 55px #fff,
              -20px 42px #fff, -14px 28px #fff,
              -7px 12px #fff;
  transition: all .3s ease;
}

.house-front-right {
  left: 217px;
  width: 118px;
  height: 130px;
  background: var(--light-purple);
  transition: background .3s ease;

  &:after {
    left: 8px;
    width: 104px;
    height: 118px;
  }

  .house-front-shadow {
    top: 12px;
    left: 70px;
    height: 64px;
    transform: skew(24deg);
    box-shadow: -4px 3px 0 1px rgba(#4A2756, .25);
    
    &:before {
      content: '';
      background: var(--light-purple);
      width: 27px;
      height: 4px;
      position: absolute;
      top: 1px;
      right: -8px;
      transform: rotate(-49deg);
    }
  }

  .house-front-lights {
    top: 10px;
    width: 4px;
    height: 4px;
    box-shadow: 7px 9px #fff, 12px 20px #fff,
                18px 33px #fff, 23px 45px #fff,
                29px 56px #fff, -29px 57px #fff,
                -23px 47px #fff, -18px 35px #fff,
                -12px 23px #fff, -7px 12px #fff;
    transition: all .3s ease;
  }
}

.roof-right {
  position: absolute;
  right: 80px;
  bottom: 55px;
  width: 35px;
  height: 75px;
  transform: skew(-24deg);
  border-radius: 3px 0 0 0;
  background: var(--pink-white);
  transition: background .3s ease;
}

.window {
  position: absolute;
  z-index: 1;
  top: 48px;
  left: 50%;
  width: 25px;
  height: 28px;
  transform: translatex(-50%);
  border: 4px solid var(--dark-pink);
  border-radius: 50%;
  background: #fff;
  box-shadow: inset 5px 0px 0 var(--orange),
              inset 10px 0px 0 var(--cream);
  transition: all .3s ease;
}

.door {
  position: absolute;
  z-index: 1;
  bottom: 60px;
  left: 50%;
  width: 25px;
  height: 40px;
  transform: translatex(-50%);
  border: 4px solid var(--dark-pink);
  border-radius: 50% 50% 0 0;
  background: #fff;
  box-shadow: inset 5px 5px 0 var(--orange),
              inset 10px 10px 0 var(--cream);
  transition: all .3s ease;
}

.door-right {
  bottom: 50px;
}

.snow-front {
  position: absolute;
  bottom: 55px;
  left: 50%;
  width: 200px;
  height: 10px;
  transform: translatex(-50%);
  border-radius: 50px 50px 0 0 / 100% 100% 0 0;
  background: var(--pink-white);
  box-shadow: inset -51px 0px 0 var(--pink-white),
              inset 47px 0px 0 var(--pink-white),
              inset -7px 3px 0 0 #FFF,
              inset -14px 5px 0 0 #FFE7C5;
  transition: all .3s ease;
}

.snowman {
  position: absolute;
  right: 130px;
  bottom: 80px;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  background: transparent;
  box-shadow: -13px -10px 0 2px #643D82,
              -6px -10px 0 2px #643D82,
              -10px -10px 0 8px var(--pink-white);
  transition: all .3s ease;

  &:after {
    content: '';
    position: absolute;
    top: -2px;
    left: -24px;
    width: 30px;
    height: 30px;
    background: var(--pink-white);
    clip-path: polygon(40% 0, 60% 0, 100% 100%, 0 100%);
    transition: background .3s ease;
  }

  &:before {
    content: '';
    position: absolute;
    z-index: 1;
    bottom: -5px;
    left: -18px;
    width: 7px;
    height: 4px;
    border-radius: 5px;
    background: #643D82;
    box-shadow: -5px 0 0 #643D82,
                14px 0 0 #643D82;
  }

  .snowman-shadow {
    position: absolute;
    z-index: 1;
    bottom: -21px;
    left: -17px;
    width: 4px;
    height: 23px;
    transform: rotate(21deg);
    border-radius: 10px 10px 25px 0 / 100% 100% 100% 0;
    background: #fff;
    box-shadow: inset -1px 5px 0 var(--pink-white);
  }
}

.toggle-input {
  display: none;

  + .toggle-btn {
    position: relative;
    position: absolute;
    top: 50%;
    left: 50%;
    overflow: hidden;
    width: 65px;
    height: 30px;
    cursor: pointer;
    user-select: none;
    transition: all .4s ease;
    transform: perspective(0) translate(-50%, -50%);
    border-radius: 50px;
    outline: 0;
    background: var(--base-purple);

    &:after {
      content: '';
      position: absolute;
      top: 50%;
      left: 4px;
      width: 22px;
      height: 22px;
      transition: all .2s ease;
      transform: translatey(-50%);
      border-radius: 50%;
      background: var(--white);
    }
  }

  &:checked + .toggle-btn:after {
    left: 62%;
  }
}

</style>

<div class="container">
    <div class="globe">
      <div class="stars"></div>
      <div class="moon"></div>
      <div class="trees"></div>
      <div class="xmas-tree"></div>
      <div class="house">
        <div class="roof">
          <div class="chimney-shadow"></div>
          <div class="chimney"></div>  
          <svg class="chimney-smoke" width="167px" height="120px" viewBox="0 0 167 126">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path class="smoke-line" d="M96,120.01193 C94.4048061,108.450138 93.7381394,100.988465 94,97.6269104 C94.8108865,87.2174052 96.6547999,82.442437 101,78.9355263 C110.8992,70.94611 126.181323,67.2687495 133,64.5154233 C137.666667,62.6310613 145.666667,60.6460727 157,58.5604574" id="Line-4" stroke-width="3" opacity="0.75" stroke-linecap="round"></path>
              <path d="M1.42108547e-14,14.1447128 C17.1627454,6.49685414 37.2619924,2.08774841 60.297741,0.917395624 C77.9320787,0.0214665788 113.248394,5.18264048 138.904897,18.967008 C148.229239,23.9766608 168.581183,35.9228973 166.132155,45.1887753 C164.825348,50.1330701 145.23725,55.4862994 128.57129,61.0442654 C114.004332,65.9022305 102.247031,71.1230124 99.3007971,73.6534064 C79.8998593,90.3160401 94.7724059,124.748188 89.216279,121.824982 C85.4617402,119.849633 82.4619414,121.398876 82.4619414,117.824982 C82.4619414,111.909255 82.9875175,100.106822 79.8340206,95.8249817 C76.085218,90.7348319 68.2196812,86.0681652 56.2374101,81.8249817 C46.8978441,76.9706385 42.0070863,73.3039718 41.5651367,70.8249817 C40.0296411,62.2120569 48.0544005,54.94236 51.9230406,53.1289686 C67.329716,45.9072238 98.1922276,39.8673063 99.3007971,30.3815627 C101.00718,15.7804836 67.9069143,10.3682003 1.42108547e-14,14.1447128 Z" id="Rectangle" opacity="0.749581473"></path>
            </g>
          </svg>
        </div>
        <div class="house-front house-front-left">
          <div class="window"></div>
          <div class="door"></div>
          <div class="house-front-shadow"></div>
          <div class="house-front-lights"></div>
        </div>
        <div class="house-front house-front-right">
          <div class="door door-right"></div>
          <div class="house-front-shadow"></div>
          <div class="house-front-lights"></div>
        </div>
        <div class="roof-right"></div>
      </div>
      <div class="snow-front"></div>
      <div class="snowman">
        <div class="snowman-shadow"></div>
      </div>
    </div>
    <div class="base">
        <p class="time">--:--:-- --<p>
    </div>
  </div>
  <script>
    setInterval(function() {
  var currentdate = new Date();
  var datetime = currentdate.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true },1000);
 // var datetime = "Last Sync: " + currentdate.getDate() + "/" + (currentdate.getMonth()+1) + "/" + currentdate.getFullYear() + " @ "  + currentdate.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true });

  $('.time').html(datetime);
  if( datetime.indexOf('AM') >= 0){
    $('body').addClass('light-version');
  }
  else if( datetime.indexOf('PM') >= 0){
    $('body').addClass('dark-version');
  }
}, 1000);




  </script>

@endsection
 @extends('layoutes.master')
 @section('content')
    
 @endsection