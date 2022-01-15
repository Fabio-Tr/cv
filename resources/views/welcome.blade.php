<x-layout>
    <x-slot name='title'>
        Fabio Trani Curriculum Vitae
    </x-slot>
    <x-navbar />

    <div class="container musthead d-flex justify-content-center align-items-center" id="home">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="row col-12 d-flex align-items-center">

                <div class="row col-12 col-md-6 text-end">
                    <h1 class="col-12">Fabio Trani</h1>
                    <h3 class="col-12 fst-italic">Full-Stack Web Developer</h3>
                </div>

                <h2 class="col-12 col-md-6 text-start">Curriculum Vitae</h2>
            </div>

            <p class="col-8 pt-5">
                Junior Full-Stack Web Developer abile nelle metodologie agili.
                La mia formazione si è concretizzata tramite il Coding Bootcamp per Web Developers di Aulab che mi ha
                fornito basi e competenze tali da iniziare il mio viaggio in questo ambito lavorativo.
                Ansioso di mettermi in gioco e continuare a migliorare ed aumentare le mie conoscenze, sono in grado di
                lavorare per obiettivi, in team e con buone capacità di problem solving anche grazie alle esperienze
                lavorative precedenti.
            </p>


        </div>
    </div>

    <div class="container justify-content-center align-items-center cv-container d-none" id="cv">
        <div class="row justify-content-center align-items-center">
            <h2 class="text-center">Curriculum Vitae</h2>

            <div class="col-12 col-md-2">
                <h4 class="col-12">Competenze tecniche</h4>
                <ul class="col-12">
                    <li>Git</li>
                    <li>Cli</li>
                    <li>Html5</li>
                    <li>CSS3</li>
                    <li>Javascript</li>
                    <li>Bootstrap</li>
                    <li>Php</li>
                    <li>OOP</li>
                    <li>Laravel</li>
                    <li>MySql</li>
                    <li>Agile methodology</li>
                    <li>Scrum</li>
                </ul>
                <h4 class="col-12">Competenze interpersonali</h4>
                <ul class="col-12">
                    <li>Lavoro in team</li>
                    <li>Lavoro per obiettivi</li>
                    <li>Organizzazione del lavoro</li>
                    <li>Problem solving</li>
                </ul>
            </div>

            <div class="row col-12 col-md-5">
                <h3 class="col-12">Istruzione e formazione</h3>
                <p class="col-12">
                    2021 <br>
                    Aulab Hackademy <br>
                    Coding Bootcamp per Web Developers <br>
                    Console Linux, pagine statiche Html/Css, basi di Javascript, Bootstrap 4 (Grid system), GitLab, Seo
                    e posizionamento motori di ricerca <br>
                    Sviluppo applicativi dinamici in Php, Laravel, OOP, database relazionali sql, Eloquent Orm
                    <br> <br>
                    2004 - 2009 <br>
                    Liceo Scientifico Sperimentale PNI Moscati, Grottaglie (TA) <br>
                    Diploma in materie scientifiche ed informatiche
                </p>
            </div>

            <div class="row col-12 col-md-5">
                <h3 class="col-12">Esperienze lavorative</h3>
                <p class="col-12">
                    3/06/2019 – 31/12/2019 <br>
                    Adecco Professional Solutions <br>
                    Store Activator OTS <br>
                    Gestione di una rete di punti vendita con passaggi settimanali prefissati con il compito di gestire
                    gli allestimenti sia fuori banco che a lineare con attenzione alla freschezza del prodotto e alla
                    corretta esposizione ed i rapporti col cliente - Rifacimenti display - Rilevazioni - Ordini in
                    diretta - Altre varie mansioni
                    <br> <br>
                    1/11/2014 – 2/06/2019 <br>
                    Sinerga Promocast – Sinerga Promostor <br>
                    Merchandiser con differenti mansioni
                    <br> <br>
                    2014 - 2016 <br>
                    Annozero – Athesis – Simmat - Arcadia <br>
                    Merchindiser con differenti mansioni per differenti aziende
                </p>
            </div>

        </div>
    </div>

    <div class="container justify-content-center align-items-center contact-form d-none" id="contact">
        <div class="row justify-content-center align-items-center">
            <h1 class="col-12 text-center">Contattami</h1>

            <form class="col-12">
                <div class="row">

                    <div class="col-12 col-md-6 mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp">
                    </div>
                    
                    <div class="col-12 col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                  </div>


                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>




</x-layout>
