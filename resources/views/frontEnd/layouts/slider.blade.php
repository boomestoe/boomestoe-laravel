<!-- basic-slider start -->
<section id="slider">
    <div class="slider-section">
        <div class="slider-active owl-carousel">
            {{-- @foreach($slider as $key=>$slider) --}}
            <div class="single-slider slider-screen nrbop bg-black-alfa-40" style="">
                <div class="container">
                    <div class="slider-content text-white">
                        <h2 class="b_faddown1 cd-headline clip is-full-width" >{{-- {{ $slider->slider_judul}} --}}</h2>
                        <p class="b_faddown2">  Isi Slider              
                        <br />a accumsan justo laoreetsit amet consecte tur adipiscing titor </p>
                        <div class="slider_button b_faddown3"><a href="#">Donate Now</a></div>
                    </div>
                </div>   
            </div> 
            {{-- @endforeach     --}}
            {{-- <div class="single-slider slider-screen nrbop bg-black-alfa-40 " style="background-image: url({{ asset('frontEnd/assets/img/slides/s2.jpg)') }});">
                <div class="container">
                    <div class="slider-content text-white">
                        <h2 class="b_faddown1 cd-headline clip is-full-width" >KINDNESS &amp; HUMANITY </h2>
                        <p class="b_faddown2">Lorem ipsum dolor sit amet consecte tur adipiscing titor sit amet consecte tur adipiscing titor                                  
                        <br />a accumsan justo laoreetsit amet consecte tur adipiscing titor </p>
                        <div class="slider_button b_faddown3"><a href="#">Donate Now</a></div>
                    </div>
                </div>              
            </div>
            <div class="single-slider slider-screen nrbop bg-black-alfa-40" style="background-image: url({{ asset('frontEnd/assets/img/slides/s3.jpg)') }};">
                <div class="container">
                    <div class="slider-content text-white">
                        <h2 class="b_faddown1 cd-headline clip is-full-width" >KINDNESS &amp; HUMANITY </h2>
                        <p class="b_faddown2">Lorem ipsum dolor sit amet consecte tur adipiscing titor sit amet consecte tur adipiscing titor                                  
                        <br />a accumsan justo laoreetsit amet consecte tur adipiscing titor </p>
                        <div class="slider_button b_faddown3"><a href="#">Donate Now</a></div>
                    </div>
                </div>              
            </div>     --}}          
        </div>
    </div>
</section>
<!-- basic-slider end -->   

