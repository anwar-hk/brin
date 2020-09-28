
<section style="background-color: lightgreen">
    <div class="uk-container uk-container-small uk-padding-large" >
        <p class="op-home-title uk-margin-large-bottom ">our partners!</p>
        <div uk-slider="center: false" class="uk-slider uk-slider-container">

            <div class="uk-position-relative uk-visible-toggle uk-light"  >

                <ul class="uk-slider-items uk-child-width-1-3 uk-child-width-1-6@s uk-grid" uk-slider=" delay: 10; autoplay: true"  style="transform: translate3d(-126.953px, 0px, 0px);">
                    <?php $partners = App\Partners::get()?>
                    @foreach ($partners as $p)
               
                    <li tabindex="4" class="uk-active" style="order: 3;" >
                        <div class="uk-card">
                            <div class="uk-card-body uk-padding-remove">
                              <img class="op-home-brands" src="{{asset('/backend/backend_img/partners/'.$p->logo)}}" alt="">
                                </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>