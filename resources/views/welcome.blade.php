<x-layout>
    <x-slot name='title'>
        Fabio Trani Curriculum Vitae
    </x-slot>
    <x-navbar />

    <div class="pt-5">

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-dark">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>




    <div itemscope itemtype="https://www.knefas.eu/Person">

        <div class="container musthead justify-content-center">

            <div class="row d-flex justify-content-center">

                <div class="row d-flex justify-content-center p-0 m-3">
                    <div class="first-title">
                        <h1 class="col-12 text-center h1-animation" itemprop="name"> Fabio Trani</h1>
                        <h3 class="col-12 text-center h3-animation fst-italic" itemprop="jobTitle">Full-Stack Web
                            Developer</h3>
                    </div>
                </div>
                <div class="container col-12 d-flex justify-content-center align-items-center home-container rounded pt-3"
                    id="home">
                    <div class="row justify-content-center d-flex align-items-center">

                        <h2 class="col-12 yellow-text font-gothic" id="aboutTitle"></h2>
                        <p class="col-12 pt-3" itemprop="knowsAbout">
                            Mi chiamo <strong>Fabio Trani</strong>, ho 31 anni e sono un <strong>Junior Full-Stack Web
                                Developer</strong> abile nelle
                            metodologie agili. <br><br>
                            La mia formazione si è concretizzata tramite il <strong>Coding Bootcamp per Web Developers
                                di Aulab</strong>
                            che
                            mi
                            ha
                            fornito basi e competenze tali da iniziare il mio viaggio in questo ambito lavorativo.
                            Sono
                            in
                            grado
                            di
                            lavorare per obiettivi, in team e con buone capacità di problem solving anche grazie alle
                            esperienze
                            lavorative precedenti. <br><br>
                            Ho sempre avuto la passione per la tecnologia ed ora sono ansioso di mettermi in gioco e
                            continuare a migliorare ed aumentare le mie conoscenze.
                            Questo sito rappresenta l'unione dell'utile al dilettevole, sviluppato da me, è uno degli
                            strumenti che ho messo in campo per farmi conoscere.
                        </p>
                    </div>
                </div>

                <div class="container col-12 justify-content-center cv-container rounded" id="cv">
                    <div class="row justify-content-center">
                        <h2 class="text-center yellow-text font-gothic" id="curriculumTitle"></h2>

                        <nav>
                            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link active yellow-text yellow-border px-1" id="nav-home-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                    aria-controls="nav-home" aria-selected="true">Competenze</button>
                                <button class="nav-link yellow-text yellow-border px-1" id="nav-profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">Formazione</button>
                                <button class="nav-link yellow-text yellow-border px-1" id="nav-contact-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">Esperienze</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">

                                <h4 class="font-gothic pt-3">Competenze tecniche</h4>
                                <div class="pb-2">
                                    <span class="badge my-rounded-pill m-1">Git</span>
                                    <span class="badge my-rounded-pill m-1">Cli</span>
                                    <span class="badge my-rounded-pill m-1">Html5</span>
                                    <span class="badge my-rounded-pill m-1">CSS3</span>
                                    <span class="badge my-rounded-pill m-1">Javascript</span>
                                    <span class="badge my-rounded-pill m-1">Bootstrap</span>
                                    <span class="badge my-rounded-pill m-1 m-1">Php</span>
                                    <span class="badge my-rounded-pill m-1">OOP</span>
                                    <span class="badge my-rounded-pill m-1">Laravel</span>
                                    <span class="badge my-rounded-pill m-1">MySql</span>
                                    <span class="badge my-rounded-pill m-1">Agile methodology</span>
                                    <span class="badge my-rounded-pill m-1">Scrum</span>
                                </div>
                                <h4 class="font-gothic pt-3">Competenze interpersonali</h4>
                                <div class="pb-2">
                                    <span class="badge my-rounded-pill m-1">Lavoro in team</span>
                                    <span class="badge my-rounded-pill m-1">Lavoro per obiettivi</span>
                                    <span class="badge my-rounded-pill m-1">Organizzazione del lavoro</span>
                                    <span class="badge my-rounded-pill m-1">Problem solving</span>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <h4 class="font-gothic pt-3">Istruzione e formazione</h4>
                                <p class="">
                                    2021 <br>
                                    <strong class="yellow-text">Aulab Hackademy</strong> <br>
                                    Coding Bootcamp per Web Developers <br>
                                    Console Linux, pagine statiche Html/Css, basi di Javascript, Bootstrap 4 (Grid
                                    system),
                                    GitLab,
                                    Seo
                                    e posizionamento motori di ricerca <br>
                                    Sviluppo applicativi dinamici in Php, Laravel, OOP, database relazionali sql,
                                    Eloquent
                                    Orm
                                    <br> <br>
                                    2004 - 2009 <br>
                                    <strong class="yellow-text">Liceo Scientifico Sperimentale PNI Moscati,
                                        Grottaglie (TA)</strong> <br>
                                    Diploma in materie scientifiche ed informatiche
                                </p>

                            </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <h4 class="font-gothic pt-3">Esperienze lavorative</h4>
                                <p class="">
                                    12/2021 <br>
                                    Aulab Hackademy <br>
                                    <strong class="yellow-text">Full-Stack Web Developer - Progetto
                                        Presto.it</strong> <br>
                                    Simulazione lavorativa in team utilizzando la metodologia Scrum per la creazione di
                                    un e-commerce customer-to-customer. Il progetto è presente sulla mia pagina Github.
                                    <br><br>
                                    3/06/2019 – 31/12/2019 <br>
                                    Adecco Professional Solutions <br>
                                    <strong class="yellow-text">Store Activator OTS</strong> <br>
                                    Gestione di una rete di punti vendita con passaggi settimanali prefissati con il
                                    compito
                                    di
                                    gestire
                                    gli allestimenti sia fuori banco che a lineare con attenzione alla freschezza del
                                    prodotto e
                                    alla
                                    corretta esposizione ed i rapporti col cliente - Rifacimenti display - Rilevazioni -
                                    Ordini
                                    in
                                    diretta - Altre varie mansioni
                                    <br> <br>
                                    1/11/2014 – 2/06/2019 <br>
                                    Sinerga Promocast – Sinerga Promostor <br>
                                    <strong class="yellow-text">Merchandiser con differenti mansioni</strong>
                                    <br> <br>
                                    2014 - 2016 <br>
                                    Annozero – Athesis – Simmat - Arcadia <br>
                                    <strong class="yellow-text">Merchindiser con differenti mansioni per differenti
                                        aziende</strong>
                                </p>

                            </div>

                        </div>



                    </div>
                </div>


                <div class="container col-12 d-flex align-items-center project-container rounded pt-3" id="project">
                    <div class="row d-flex align-items-center">

                        <h2 class="col-12 yellow-text font-gothic text-start" id="projectTitle"></h2>

                        <div class="card col-12 col-md-3 pt-3 card-project">
                            <img src="/img/peterhouse-home.png" class="card-img-top"
                                alt="Anteprima progetto Peters house">
                            <div class="card-body">
                                <h5 class="card-title">Peter's House</h5>
                                <p class="card-text">Progetto per un sito vetrina di due case vacanze (ancora in
                                    sviluppo)</p>
                                <a href="http://peters-house.herokuapp.com/" class="btn btn-primary">Vai al
                                    sito</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container col-12 justify-content-center align-items-center contact-form  rounded"
                    id="contact">
                    <div class="row justify-content-center align-items-center">
                        <h2 class="col-12 text-center yellow-text font-gothic" id="contactTitle"></h2>

                        <form class="col-12" method="POST" action="{{ route('mail.contact') }}">
                            @csrf
                            <div class="row col-12 col-md-8">

                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputName" class="form-label">Il tuo nome</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        id="exampleInputName">
                                </div>

                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Il tuo indirizzo
                                        email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                        id="exampleInputEmail1">
                                </div>

                            </div>


                            <div class="col-12 mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Scrivi qui il tuo
                                    messaggio</label>
                                <textarea type="Text" name="message" value="{{ old('message') }}"
                                    class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Invia!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <x-footer />
    </div>
</x-layout>
