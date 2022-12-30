<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>                    
                <span></span> Contact us
            </div>
        </div>
    </div>                
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 m-auto">
                    <div class="contact-from-area padding-20-row-col wow FadeInUp">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Send Us A Message
                        </h4>
                        <form wire:submit.prevent="saveMessage" class="contact-form-style text-center" id="contact-form" action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input wire:model="email" name="email" placeholder="Your Email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input wire:model="telepon" name="telephone" placeholder="Your Phone" type="tel">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="textarea-style mb-30">
                                        <textarea wire:model="message" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="submit submit-auto-width" type="submit">Send message</button>
                                </div>
                                {{-- <div>
                                    {{$message}}
                                </div> --}}
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31583.562183592076!2d114.26513061562501!3d-8.30823769999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1573b2dfbad87%3A0x20c2dc76b283fe74!2sWong%20Osing%20Banyuwangi!5e0!3m2!1sid!2sid!4v1670671232974!5m2!1sid!2sid" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>    
    </section>
</main>


