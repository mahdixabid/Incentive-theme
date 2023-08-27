<?php
function telegram()
{
    ?>
 <style>
      .telegram {
      position: relative;
      display: block !important;
      width: 5.56vw !important;
      margin: 4.17vw auto;
      z-index: 3;
      transform: translateY(-4vw);
    }

    #paper-plane {
    width: 4.44vw;
    height:4.44vw;
    justify-content: center;
    display: flex;
    text-align: center;
    }

    .telegram .delay1 {
      -webkit-animation: waves 2.5s linear;
      animation: waves 2.5s linear;
      -webkit-animation-delay: 0.1s;
      animation-delay: 0.1s;
      display: none !important;
    }

    .telegram .delay2 {
      -webkit-animation: waves 2.5s linear 0.7s forwards;
      animation: waves 2.5s linear 0.7s forwards;
      animation-iteration-count: infinite;
    }

    .telegram .delay3 {
      -webkit-animation: waves 2.5s linear 1.3s forwards;
      animation: waves 2.5s linear 1.3s forwards;
      animation-iteration-count: infinite;
    }

    .telegram .delay4 {
      -webkit-animation: waves 2.5s linear 1.9s forwards;
      animation: waves 2.5s linear 1.9s forwards;
      animation-iteration-count: infinite;
    }

    .svg-box {
      position: relative;
      z-index: 10;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      top: 3.5vw;
      left: 3.2vw;
    }

    .svg-box {
      -webkit-animation: bloop 1s linear;
      animation: bloop 1s linear;
    }

    .circle {
      display: block;
      height: 10.42vw;
      width: 10.42vw;
      border-radius: 50%;
      /* background: #0194c763; */
      border: 1px solid #00B7E9;
      margin: 0.69vw;
      transition: 5s ease;
      position: absolute;
      top: 0px;
    }

    @-webkit-keyframes waves {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      100% {
        transform: scale(3);
        opacity: 0;
      }
    }

    @-webkit-keyframes bloop {
      0% {
        transform: scale3d(1, 1, 1);
      }

      30% {
        transform: scale3d(1.25, 0.75, 1);
      }

      40% {
        transform: scale3d(0.75, 1.25, 1);
      }

      50% {
        transform: scale3d(1.15, 0.85, 1);
      }

      65% {
        transform: scale3d(0.95, 1.05, 1);
      }

      75% {
        transform: scale3d(1.05, 0.95, 1);
      }

      100% {
        transform: scale3d(1, 1, 1);
      }
    }

    @keyframes bloop {
      0% {
        transform: scale3d(1, 1, 1);
      }

      30% {
        transform: scale3d(1.25, 0.75, 1);
      }

      40% {
        transform: scale3d(0.75, 1.25, 1);
      }

      50% {
        transform: scale3d(1.15, 0.85, 1);
      }

      65% {
        transform: scale3d(0.95, 1.05, 1);
      }

      75% {
        transform: scale3d(1.05, 0.95, 1);
      }

      100% {
        transform: scale3d(1, 1, 1);
      }
    }
 </style>
 <div class="telegram">
    <div class="svg-box">
    <svg id="paper-plane" xmlns="http://www.w3.org/2000/svg" width="90.297" height="86.535" viewBox="0 0 90.297 86.535">
  <path id="Path_49275" data-name="Path 49275" d="M8.75,17.612v17.45a2.821,2.821,0,0,0,5.094,1.67L24.052,22.842Z" transform="translate(24.171 48.651)" fill="#00b7e9"/>
  <path id="Path_49276" data-name="Path 49276" d="M89.112.523A2.823,2.823,0,0,0,86.17.32L1.516,44.528A2.823,2.823,0,0,0,1.908,49.7l23.534,8.044L75.56,14.892,36.777,61.617,76.218,75.1a2.887,2.887,0,0,0,.91.15,2.819,2.819,0,0,0,2.792-2.4L90.267,3.24A2.827,2.827,0,0,0,89.112.523Z" transform="translate(0 0)" fill="#00b7e9"/>
</svg>



    </div>
    <div class="circle delay1"></div>
    <div class="circle delay2"></div>
    <div class="circle delay3"></div>
    <div class="circle delay4"></div>
  </div>
<?php
}

add_shortcode("telegram", "telegram");
?>
