<?php
function telegram() {
?>
 <style>
      .telegram {
      position: relative;
      display: block !important;
      width: 80px;
      margin: 60px auto;
      z-index: 3;
    }

    #paper-plane {
      width: 37px;
      justify-content: center;
      display: flex;
      text-align: center;
      transform: translate(-3px, 7px);
    }

    .telegram .delay1 {
      -webkit-animation: waves 2.5s linear;
      animation: waves 2.5s linear;
      -webkit-animation-delay: 0.1s;
      animation-delay: 0.1s;
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
    }

    .svg-box {
      -webkit-animation: bloop 1s linear;
      animation: bloop 1s linear;
    }

    .circle {
      display: block;
      height: 60px;
      width: 60px;
      border-radius: 50%;
      background: #0194c7;
      margin: 10px;
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
        transform: scale(4);
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
      <svg id="paper-plane" xmlns="http://www.w3.org/2000/svg" width="69.171" height="66.289"
        viewBox="0 0 69.171 66.289">
        <path id="Path_49275" data-name="Path 49275" d="M8.75,17.612V30.979a2.161,2.161,0,0,0,3.9,1.28l7.819-10.641Z"
          transform="translate(16.469 33.148)" fill="#fff" />
        <path id="Path_49276" data-name="Path 49276"
          d="M68.263.4A2.162,2.162,0,0,0,66.01.245L1.162,34.11a2.163,2.163,0,0,0,.3,3.963l18.028,6.162L57.882,11.408,28.173,47.2,58.386,57.528a2.212,2.212,0,0,0,.7.115A2.16,2.16,0,0,0,61.222,55.8l7.926-53.32A2.165,2.165,0,0,0,68.263.4Z"
          transform="translate(0 0)" fill="#fff" />
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
