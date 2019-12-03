@if($cofigStore->socialLinks->whatsapp == 1)
<div class="product=inline-share-buttons"></div>
    <!-- BTN POPUP -->
    <div class="wa__btn_popup">
        <div class="wa__btn_popup_txt">Preciso de ajuda? <strong>Converse conosco </strong></div>
        <div class="wa__btn_popup_icon"></div>
    </div>
    <div class="wa__popup_chat_box">
        <div class="wa__popup_heading">
            <div class="wa__popup_intro">Oi! Clique em um de nossos membros abaixo para conversar no <strong>WhatsApp ;)</strong>
                <div id="\&quot;eJOY__extension_root\&quot;"></div>
                </a>
            </div>
        </div>
        <div class="wa__popup_content wa__popup_content_left">
            <div class="wa__popup_notice">A equipe normalmente responde em alguns minutos.</div>
            <div class="wa__popup_content_list">
                <div class="wa__popup_content_item ">
                    <a target="_blank" href="https://{{$sub}}.whatsapp.com/send?phone=5511932092772&text=Olá, visitei {{config('app.name')}} e preciso de ajuda sua. Aqui está o link https://demo2.avdesign.com.br" class="wa__stt wa__stt_online">
                        <div class="wa__popup_avatar">
                            <div class="wa__cs_img_wrap" style="background: url({{asset('images/stores/whatsapp/user-1.jpg')}}) center center no-repeat; background-size: cover;"></div>
                        </div>

                        <div class="wa__popup_txt">
                            <div class="wa__member_name">João Nogueira</div>
                            <div class="wa__member_duty">Suporte ao Cliente</div>
                        </div>
                    </a>
                </div>
                <div class="wa__popup_content_item ">
                    <a target="_blank" href="https://{{$sub}}.whatsapp.com/send?phone=5511932092772&text=Olá, visitei {{config('app.name')}} e preciso de ajuda sua. Aqui está o link https://demo2.avdesign.com.br" class="wa__stt wa__stt_online">
                        <div class="wa__popup_avatar">
                            <div class="wa__cs_img_wrap" style="background: url({{asset('images/stores/whatsapp/user-2.jpg')}}) center center no-repeat; background-size: cover;"></div>
                        </div>

                        <div class="wa__popup_txt">
                            <div class="wa__member_name">Kelly Magalhães</div>
                            <div class="wa__member_duty">Suporte de Venda</div>
                        </div>
                    </a>
                </div>
                <div class="wa__popup_content_item ">
                    <a target="_blank" href="https://{{$sub}}.whatsapp.com/send?phone=5511932092772&text=Olá, visitei {{config('app.name')}} e preciso de ajuda sua. Aqui está o link https://demo2.avdesign.com.br" class="wa__stt wa__stt_online">
                        <div class="wa__popup_avatar">
                            <div class="wa__cs_img_wrap" style="background: url({{asset('images/stores/whatsapp/avatar-1.png')}}) center center no-repeat; background-size: cover;"></div>
                        </div>

                        <div class="wa__popup_txt">
                            <div class="wa__member_name">Dominic Velame</div>
                            <div class="wa__member_duty">Suporte Tecnico</div>
                            <div class="wa__member_status">Eu votarei em brebe </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endif