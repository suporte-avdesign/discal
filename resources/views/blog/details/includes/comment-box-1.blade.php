<div class="comment-box">
    <h3>Comentários</h3>
    <ul class="comment-list">
        <li>
            <div class="comment-item">
                <div class="comment-image">
                    <img src="{{asset('images/profiles/author1.jpg')}}" alt="Image">
                </div>
                <div class="comment-content">
                    <h4>{{getComment('name')}}</h4>
                    <p class="date"><i class="icon-clock"></i> {{getComment('hour')}}</p>
                    <p>{{config('slogan.'.rand(10,21))}}</p>
                    <a href="#" class="btn-white btn-red">Resposta</a>
                </div>
            </div>
            <ul class="reply">
                <li>
                    <div class="comment-item">
                        <div class="comment-image">
                            <img src="{{asset('images/profiles/author1.jpg')}}" alt="Image">
                        </div>
                        <div class="comment-content">
                            <h4>{{getComment('name')}}</h4>
                            <p class="date"><i class="icon-clock"></i> {{getComment('day')}}</p>
                            <p>{{config('slogan.'.rand(10,21))}}</p>
                            <a href="#" class="btn-white btn-red">Resposta</a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div class="comment-item">
                <div class="comment-image">
                    <img src="{{asset('images/profiles/author1.jpg')}}" alt="Image">
                </div>
                <div class="comment-content">
                    <h4>{{getComment('name')}}</h4>
                    <p class="date"><i class="icon-clock"></i> {{getComment('month')}}</p>
                    <p>{{config('slogan.'.rand(10,21))}}</p>
                    <a href="#" class="btn-white btn-red">Resposta</a>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="comment-form">
    <form>
        <h3>Adicione um comentário</h3>
        <div class="row">
            <div class="textarea col-sm-12">
                <label for="comment">Seu comentário:</label>
                <textarea name="comment"></textarea>
            </div>
            <div class="form-group col-sm-6">
                <label for="name">Nome:</label>
                <input type="name" class="form-control" id="Name">
            </div>
            <div class="form-group col-sm-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-sm-12">
                <div class="comment-btn">
                    <a href="#" class="btn-white btn-red">Enviar Comentário</a>
                </div>
            </div>
        </div>
    </form>
</div>
