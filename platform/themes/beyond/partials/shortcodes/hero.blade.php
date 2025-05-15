<!-- hero area start -->

  <style>
    .tp-hero-3-area .logo {
      max-width: 35vw;
      height: auto;
      display: block;
      margin: 50px auto;
    }
.tp-hero-3-area .tp-btn-black-2 span .svg-icon {
    color:#fff;
}
    .tp-hero-3-area .st0,.tp-hero-3-area .st1 {
      transition: fill 0.3s ease, transform 0.1s ease; /* Add transition for fill and transform */
    }

    /* Hover effects for each individual piece */
    #piece1:hover,
    #piece2:hover,
    #piece3:hover,
    #piece4:hover,
    #piece5:hover,
    #piece6:hover {
      fill: #41BFB4; /* Change to blue on hover */
      transform: translate(1px, -1px) rotate(2deg); /* Add a subtle shake */
    }

    #piece7:hover {
      fill: #193760; /* Change to original color on hover */
      transform: translate(1px, -1px) rotate(2deg); /* Add a subtle shake */
    }
  </style>
<style>
        /*body {*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    height: 100vh;*/
        /*    margin: 0;*/
        /*    background-color: #f0f0f0;*/
        /*    font-family: Arial, sans-serif;*/
        /*    overflow: hidden;*/
        /*}*/
        @media (min-width: 1400px) {
   .text-container {
               font-size: 7em;
   }
}

.tp-hero-3-area svg {
    max-width: 20vw;
    /* float: left; */
    display: block;
    margin-left: 3vw;
}
        .text-container {
                max-width: 40vw;
               font-size: 6em;
                font-weight: bold;
                /* display: flex; */
                min-height: 15vh;
                text-align: center;
                /*width: 100%;*/
                margin: 0 auto;
                    padding: 60px 20px;
        }
.logo-container {
           
                max-width: 40vw;
                min-height: 15vh;
                text-align: center;
                /*width: 100%;*/
                margin: 0 auto;
                    padding: 120px 20px;
        }
        .letter {
            display: inline-block;
            transition: transform 0.3s ease, color 0.3s ease;
            cursor: pointer;
            color:#193760;
        }

        .letter:hover {
            transform: scale(1.2);
            color: #41BFB4; /* تغيير اللون عند التمرير */
        }
    </style>
<div class="tp-hero-3-area tp-hero-3-ptb fix">
    {{--<div id="particles-js"></div>--}}

    <div class="container">
        {{--<div id="particle-canvas"></div>--}}

        <div style="position: relative;z-index:999">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-hero-3-content-box text-center p-relative">
                        {{--<div id="particle-canvas"></div>--}}
                        <div class="tp-hero-3-circle-shape">
                            <span></span>
                        </div>
                        <svg class="logo" viewBox="0 0 595.28 328" style="enable-background:new 0 0 595.28 328;" xml:space="preserve">
    <style type="text/css">
      .st0{fill:#193760;}
      .st1{fill:#41BFB4;}
    </style>
    <g>
      <path id="piece1" class="st0" d="M349.4,284.93c-20.59,0-37.34-16.75-37.34-37.34v-64.8c0-20.59,16.75-37.34,37.34-37.34
        c20.59,0,37.34,16.75,37.34,37.34v64.8C386.74,268.17,369.99,284.93,349.4,284.93z M349.4,160.87c-12.08,0-21.91,9.83-21.91,21.91
        v64.8c0,12.08,9.83,21.91,21.91,21.91s21.91-9.83,21.91-21.91v-64.8C371.31,170.7,361.48,160.87,349.4,160.87z"/>
    </g>
    <g>
      <g>
        <path id="piece2" class="st0" d="M522.94,284.93H485.6V151.52c0-3.35,2.72-6.07,6.07-6.07h31.27c20.62,0,37.34,16.72,37.34,37.34v64.8
          C560.28,268.21,543.56,284.93,522.94,284.93z M501.03,269.5h21.91c12.08,0,21.91-9.83,21.91-21.91v-64.8
          c0-12.08-9.83-21.91-21.91-21.91h-21.91V269.5z"/>
      </g>
    </g>
    <g>
      <path id="piece3" class="st0" d="M458.26,284.96l-44.17-101.41v101.41h-15.43V151.52c0-3.35,2.72-6.07,6.07-6.07h9.35l44.17,101.24v-95.17
        c0-3.35,2.72-6.07,6.07-6.07h9.35v139.51H458.26z"/>
    </g>
    <path id="piece4" class="st0" d="M213.54,160.87v-15.43h-69.3c-3.35,0-6.07,2.72-6.07,6.07v133.41h75.37V269.5H153.6v-49.91h49.2v-15.43h-49.2
      v-43.28H213.54z"/>
    <g>
      <path id="piece5" class="st0" d="M299.97,145.44h-9.35c-3.35,0-6.07,2.72-6.07,6.07l0,42.01c0,11.66-8.78,21.86-20.41,22.64
        c-12.76,0.85-23.41-9.28-23.41-21.86v-48.86h-9.35c-3.35,0-6.07,2.72-6.07,6.07l0,41.92c0,19.42,14.49,36.26,33.83,38.04
        c9.52,0.88,18.39-1.85,25.42-6.97l0,22.3c0,11.66-8.78,21.85-20.41,22.63c-10.99,0.74-20.43-6.69-22.82-16.81
        c-0.69-2.92-3.17-5.05-6.17-5.05l-9.85,0c0,21.2,17.76,38.33,39.19,37.29c20.07-0.98,35.48-18.28,35.48-38.37L299.97,145.44z"/>
    </g>
    <path id="piece6" class="st0" d="M123.03,223.99c0-0.02-0.02-0.02-0.02-0.03c-1.28-3.18-3.05-6.06-5.15-8.66c-0.09-0.14-0.2-0.28-0.31-0.4
      c-2.76-3.47-6.06-6.48-9.8-8.92l-0.02,0.02c-1.57-1.11-3.15-2.08-4.64-2.92c11.73-9.71,16.12-31.26,3.62-48.45
      c-4.27-5.87-11.23-9.18-18.49-9.18H67.15h-5.06h-4.29c-3.35,0-6.07,2.72-6.07,6.07v4.29v9.85v99.06v9.83v10.38H62.1h5.05h7.34v-0.03
      h15.67c11.14,0,21.72-5.39,27.85-14.69C128.01,255.07,128.41,236.26,123.03,223.99z M67.15,160.87h16.4
      c8.58,0,15.54,8.98,15.25,17.65c-0.28,8.29-7.36,16.19-15.65,16.19h-16v-29.04V160.87z M110.85,240.98
      c0,23.82-13.24,28.5-23.28,28.5l-20.43,0.03v-4.79v-54.58C101.02,210.14,110.85,227.26,110.85,240.98z"/>
    <path id="piece7" class="st1" d="M216.46,37.39c-34.84,0-64.65,21.79-76.5,52.42c-8.85-11.47-22.73-18.88-38.33-18.88
      c-26.66,0-48.35,21.64-48.35,48.23h9.81c2.99,0,5.62-2.13,6.09-5.09c2.46-15.64,16.08-27.64,32.45-27.64
      c18.11,0,32.85,14.68,32.85,32.73h15.5c0-36.54,29.82-66.27,66.48-66.27c34.74,0,63.35,26.7,66.24,60.6
      c0.27,3.2,2.94,5.66,6.15,5.66h9.58C298.44,74.07,261.66,37.39,216.46,37.39z"/>
  </svg>

<!--                         <div class="logo-container">-->
<!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.43 78.85"><defs><style>.cls-1{fill:#41bfb4;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M93.25,78.85H78.3a31.69,31.69,0,0,0-63-4.91,5.91,5.91,0,0,1-5.87,4.91H0a46.63,46.63,0,0,1,93.25,0"/><path class="cls-1" d="M236.43,78.85h-9.24a6,6,0,0,1-5.94-5.46,64.13,64.13,0,0,0-128,5.46H78.3a79.06,79.06,0,0,1,158.13,0"/></g></g></svg>-->
                             <!--<img src='/storage/general/logo-asset-1.png'>-->
<!--                              <div class="text-container">-->
<!--                            <span class="letter">B</span>-->
<!--                            <span class="letter">E</span>-->
<!--                            <span class="letter">Y</span>-->
<!--                            <span class="letter">O</span>-->
<!--                            <span class="letter">N</span>-->
<!--                            <span class="letter">D</span>-->
<!--                        </div></div>-->
                        <svg style='display:none;' version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 595.28 328" style="enable-background:new 0 0 595.28 328;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#193760;}
    .st1{fill:#41BFB4;}
</style>
                            <g>
                                <path class="st0 p1" d="M349.4,284.93c-20.59,0-37.34-16.75-37.34-37.34v-64.8c0-20.59,16.75-37.34,37.34-37.34
		c20.59,0,37.34,16.75,37.34,37.34v64.8C386.74,268.17,369.99,284.93,349.4,284.93z M349.4,160.87c-12.08,0-21.91,9.83-21.91,21.91
		v64.8c0,12.08,9.83,21.91,21.91,21.91s21.91-9.83,21.91-21.91v-64.8C371.31,170.7,361.48,160.87,349.4,160.87z">
                                    <animateTransform attributeName="transform" type="translate" from="0 0" to="100 0" dur="2s" repeatCount="indefinite"/>
                                </path>
                            </g>
                            <g>
                                <g>
                                    <path class="st0 p2" d="M522.94,284.93H485.6V151.52c0-3.35,2.72-6.07,6.07-6.07h31.27c20.62,0,37.34,16.72,37.34,37.34v64.8
			C560.28,268.21,543.56,284.93,522.94,284.93z M501.03,269.5h21.91c12.08,0,21.91-9.83,21.91-21.91v-64.8
			c0-12.08-9.83-21.91-21.91-21.91h-21.91V269.5z">
                                        <animateTransform attributeName="transform" type="translate" from="0 0" to="100 0" dur="2s" repeatCount="indefinite"/>
                                    </path>
                                </g>
                            </g>
                            <g>
                                <path class="st0 p3" d="M458.26,284.96l-44.17-101.41v101.41h-15.43V151.52c0-3.35,2.72-6.07,6.07-6.07h9.35l44.17,101.24v-95.17
		c0-3.35,2.72-6.07,6.07-6.07h9.35v139.51H458.26z">
                                    <animateTransform attributeName="transform" type="translate" from="0 0" to="100 0" dur="2s" repeatCount="indefinite"/>
                                </path>
                            </g>
                            <path class="st0 p4" d="M213.54,160.87v-15.43h-69.3c-3.35,0-6.07,2.72-6.07,6.07v133.41h75.37V269.5H153.6v-49.91h49.2v-15.43h-49.2
	v-43.28H213.54z">
                                <animateTransform attributeName="transform" type="translate" from="0 0" to="100 0" dur="2s" repeatCount="indefinite"/>
                            </path>
                            <g>
                                <path class="st0 p5" d="M299.97,145.44h-9.35c-3.35,0-6.07,2.72-6.07,6.07l0,42.01c0,11.66-8.78,21.86-20.41,22.64
		c-12.76,0.85-23.41-9.28-23.41-21.86v-48.86h-9.35c-3.35,0-6.07,2.72-6.07,6.07l0,41.92c0,19.42,14.49,36.26,33.83,38.04
		c9.52,0.88,18.39-1.85,25.42-6.97l0,22.3c0,11.66-8.78,21.85-20.41,22.63c-10.99,0.74-20.43-6.69-22.82-16.81
		c-0.69-2.92-3.17-5.05-6.17-5.05l-9.85,0c0,21.2,17.76,38.33,39.19,37.29c20.07-0.98,35.48-18.28,35.48-38.37L299.97,145.44z">
                                    <animateTransform attributeName="transform" type="translate" from="0 0" to="100 0" dur="2s" repeatCount="indefinite"/>
                                </path>
                            </g>
                            <path class="st0 p6" d="M123.03,223.99c0-0.02-0.02-0.02-0.02-0.03c-1.28-3.18-3.05-6.06-5.15-8.66c-0.09-0.14-0.2-0.28-0.31-0.4
	c-2.76-3.47-6.06-6.48-9.8-8.92l-0.02,0.02c-1.57-1.11-3.15-2.08-4.64-2.92c11.73-9.71,16.12-31.26,3.62-48.45
	c-4.27-5.87-11.23-9.18-18.49-9.18H67.15h-5.06h-4.29c-3.35,0-6.07,2.72-6.07,6.07v4.29v9.85v99.06v9.83v10.38H62.1h5.05h7.34v-0.03
	h15.67c11.14,0,21.72-5.39,27.85-14.69C128.01,255.07,128.41,236.26,123.03,223.99z M67.15,160.87h16.4
	c8.58,0,15.54,8.98,15.25,17.65c-0.28,8.29-7.36,16.19-15.65,16.19h-16v-29.04V160.87z M110.85,240.98
	c0,23.82-13.24,28.5-23.28,28.5l-20.43,0.03v-4.79v-54.58C101.02,210.14,110.85,227.26,110.85,240.98z">
                                <animateTransform attributeName="transform" type="translate" from="0 0" to="100 0" dur="2s" repeatCount="indefinite"/>
                            </path>
                            <path class="st1" d="M216.46,37.39c-34.84,0-64.65,21.79-76.5,52.42c-8.85-11.47-22.73-18.88-38.33-18.88
	c-26.66,0-48.35,21.64-48.35,48.23h9.81c2.99,0,5.62-2.13,6.09-5.09c2.46-15.64,16.08-27.64,32.45-27.64
	c18.11,0,32.85,14.68,32.85,32.73h15.5c0-36.54,29.82-66.27,66.48-66.27c34.74,0,63.35,26.7,66.24,60.6
	c0.27,3.2,2.94,5.66,6.15,5.66h9.58C298.44,74.07,261.66,37.39,216.46,37.39z"/>
</svg>
                        <h4 class="tp-hero-3-title tp_reveal_anim">
                            {{--{{ RvMedia::getImageUrl($shortcode->logo) }}--}}
                            {{--<span class="tp-reveal-line">{{$shortcode->title}}</span>--}}
                            {{--<span class="tp-reveal-line">digital agency</span>--}}
                        </h4>
                        <span class="tp-hero-3-category tp_reveal_anim">{!! $shortcode->subtitle  !!}</span>
                        <a class="tp-btn-black-2" href="/contact">
                            {{$shortcode->btn}}
                            <span class="p-relative">
                                 <svg class="svg-icon" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                     <path
                                             d="M9.86041 4.6429C9.94985 4.7377 10 4.86575 10 4.9992C10 5.13264 9.94985 5.2607 9.86041 5.35551L5.57586 9.85624C5.48448 9.94804 5.36309 9.99948 5.23667 10C5.17349 9.99969 5.11092 9.98704 5.0522 9.96246C4.96556 9.9243 4.89163 9.85991 4.83974 9.77759C4.78785 9.69527 4.76032 9.59866 4.76061 9.49994V5.49928H0.476061C0.349802 5.49928 0.228714 5.4466 0.139435 5.35281C0.0501564 5.25903 0 5.13183 0 4.9992C0 4.86657 0.0501564 4.73937 0.139435 4.64559C0.228714 4.55181 0.349802 4.49912 0.476061 4.49912H4.76061V0.49847C4.76032 0.399742 4.78785 0.303131 4.83974 0.220813C4.89163 0.138494 4.96556 0.0741515 5.0522 0.0358946C5.14013 -0.000133693 5.23598 -0.00927405 5.32865 0.00953239C5.42132 0.0283378 5.50703 0.0743215 5.57586 0.142163L9.86041 4.6429Z"
                                             fill="currentcolor"/>
                                 </svg>
                                 <!--<svg class="svg-bg" width="30" height="30" viewBox="0 0 30 30" fill="none"-->
                                 <!--     xmlns="http://www.w3.org/2000/svg">-->
                                 <!--    <path-->
                                 <!--            d="M14.2257 0.947522C14.6258 0.457905 15.3742 0.457905 15.7743 0.947522L16.8781 2.29817C17.181 2.66879 17.704 2.77283 18.1256 2.54633L19.6623 1.72088C20.2193 1.42165 20.9107 1.70806 21.093 2.31352L21.5959 3.98376C21.7339 4.44207 22.1773 4.73834 22.6535 4.69044L24.3891 4.51587C25.0182 4.45258 25.5474 4.98179 25.4841 5.61093L25.3096 7.34647C25.2617 7.8227 25.5579 8.2661 26.0162 8.40409L27.6865 8.90697C28.2919 9.08926 28.5783 9.7807 28.2791 10.3377L27.4537 11.8744C27.2272 12.296 27.3312 12.819 27.7018 13.1219L29.0525 14.2257C29.5421 14.6258 29.5421 15.3742 29.0525 15.7743L27.7018 16.8781C27.3312 17.181 27.2272 17.704 27.4537 18.1256L28.2791 19.6623C28.5783 20.2193 28.2919 20.9107 27.6865 21.093L26.0162 21.5959C25.5579 21.7339 25.2617 22.1773 25.3096 22.6535L25.4841 24.3891C25.5474 25.0182 25.0182 25.5474 24.3891 25.4841L22.6535 25.3096C22.1773 25.2617 21.7339 25.5579 21.5959 26.0162L21.093 27.6865C20.9107 28.2919 20.2193 28.5783 19.6623 28.2791L18.1256 27.4537C17.704 27.2272 17.181 27.3312 16.8781 27.7018L15.7743 29.0525C15.3742 29.5421 14.6258 29.5421 14.2257 29.0525L13.1219 27.7018C12.819 27.3312 12.296 27.2272 11.8744 27.4537L10.3377 28.2791C9.7807 28.5783 9.08926 28.2919 8.90697 27.6865L8.40409 26.0162C8.2661 25.5579 7.8227 25.2617 7.34647 25.3096L5.61093 25.4841C4.98179 25.5474 4.45258 25.0182 4.51587 24.3891L4.69044 22.6535C4.73834 22.1773 4.44207 21.7339 3.98376 21.5959L2.31352 21.093C1.70806 20.9107 1.42165 20.2193 1.72088 19.6623L2.54633 18.1256C2.77283 17.704 2.66879 17.181 2.29817 16.8781L0.947522 15.7743C0.457905 15.3742 0.457905 14.6258 0.947522 14.2257L2.29817 13.1219C2.66879 12.819 2.77283 12.296 2.54633 11.8744L1.72088 10.3377C1.42165 9.7807 1.70806 9.08926 2.31352 8.90697L3.98376 8.40409C4.44207 8.2661 4.73834 7.8227 4.69044 7.34647L4.51587 5.61093C4.45258 4.98179 4.98179 4.45258 5.61093 4.51587L7.34647 4.69044C7.8227 4.73834 8.2661 4.44207 8.40409 3.98376L8.90697 2.31352C9.08926 1.70806 9.7807 1.42165 10.3377 1.72088L11.8744 2.54633C12.296 2.77283 12.819 2.66879 13.1219 2.29817L14.2257 0.947522Z"-->
                                 <!--            fill="currentColor"/>-->
                                 <!--</svg>-->
                              </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- hero area end -->


<style>
    .tp-hero-3-area {
        position: relative; /* Establishes the container as the reference point for absolute positioning */
        /*background:  #000;!* linear-gradient(90deg, rgb(0, 10, 25) 0%, rgb(45, 1, 63) 99%, rgb(45, 1, 63) 100%); *!*/
    }

    .tp-hero-3-area #particles-js {
        position: absolute; /* Position within the parent container */
        z-index: 999999999999; /* Ensure it is behind other content but above other lower z-index elements */
        left: 0;
        top: 0;
        width: 100%; /* Ensure it spans the width of the parent */
        height: 100%; /* Ensure it covers the height of the parent */
        opacity: 0.5; /* Adjust opacity as needed */
        pointer-events: auto; /* Ensures particlesJS does not interfere with user interactions */
    }

    .tp-hero-3-category {
        color: #fff !important;
    }

</style>
<script>
    const logo = document.querySelector('.logo');
    const pieces = document.querySelectorAll('.st0, .st1');
    const sensitivity = 0.02; 
    const colors = ['#193760', '#41BFB4']; 
    let currentColorIndex = 0; 

    let mouseX = 0;
    let mouseY = 0;

    document.addEventListener('mousemove', (event) => {
      mouseX = event.clientX;
      mouseY = event.clientY;
    });

    function updateLogoPosition() {
      pieces.forEach(piece => {
        const bbox = piece.getBBox();
        const cx = bbox.x + bbox.width / 2;
        const cy = bbox.y + bbox.height / 2;
        const dx = (mouseX - cx) * sensitivity;
        const dy = (mouseY - cy) * sensitivity;
        piece.style.transform = `translate(${dx}px, ${dy}px)`;
      });
      requestAnimationFrame(updateLogoPosition);
    }

    pieces.forEach(piece => {
      piece.addEventListener('click', () => {
        currentColorIndex = (currentColorIndex + 1) % colors.length; 
        piece.style.fill = colors[currentColorIndex]; 
      });
    });

    updateLogoPosition();
  </script>
<script>
        const letters = document.querySelectorAll('.letter');

        letters.forEach(letter => {
            letter.addEventListener('mousemove', (e) => {
                const x = (e.clientX - window.innerWidth / 2) / 20;
                const y = (e.clientY - window.innerHeight / 2) / 20;

                letter.style.transform = `translate(${x}px, ${y}px) scale(1.2)`;
            });

            letter.addEventListener('mouseleave', () => {
                letter.style.transform = 'translate(0, 0) scale(1)';
            });
        });
    </script>
