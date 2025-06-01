<!-- funfact area start -->
<div class="ab-funfact-area pb-40">
    <div class="container container-1480">
        <div class="row">
            <div class="col-xl-4">
                <div class="ab-funfact-title-box">
                           <span class="ab-inner-subtitle mb-25">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 0C12 3.0432 9.53292 5.5102 6.48975 5.5102C6.48975 2.46701 8.95677 0 12 0Z"
                                        fill="currentcolor"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.0231934 0.0231209C3.06639 0.0231209 5.5334 2.49015 5.5334 5.53333C2.4902 5.53333 0.0231934 3.0663 0.0231934 0.0231209Z"
                                        fill="currentcolor"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.48975 6.4898C9.53294 6.4898 12 8.95682 12 12C8.95675 12 6.48975 9.53297 6.48975 6.4898Z"
                                        fill="currentcolor"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.5102 6.48981C5.5102 9.533 3.04318 12 0 12C0 8.95681 2.46703 6.48981 5.5102 6.48981Z"
                                        fill="currentcolor"/>
                              </svg>
                             {{( __("Some Numbers"))}}
                           </span>
                    <h4 class="ab-inner-funfact-title ">{{$shortcode->title}}</h4>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="ab-funfact-wrap">
                    <div class="row gx-75">
                        @for($i=1;$i<5;$i++)
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="ab-funfact-item mb-90">
                                <span><i data-purecounter-duration="1" data-purecounter-end="{{($shortcode->{'number'.$i})}}"
                                         class="purecounter">0</i>+</span>
                                    <p>{{($shortcode->{'lb'.$i})}}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- funfact area end -->

