window.onload = function () {

    var x = document.getElementById("home");
    var xBtn = document.getElementById('home-nav');
    var y = document.getElementById("cv");
    var yBtn = document.getElementById('cv-nav');
    var z = document.getElementById("contact");
    var zBtn = document.getElementById('contact-nav');
    var v = document.getElementById("project");
    var vBtn = document.getElementById('project-nav');


    function myEffect(a, b, c, d, aBtn) {
        aBtn.onclick = function () {
            a.style.display = "block";
            a.classList.add("d-flex");
            b.style.display = "none";
            b.classList.remove("d-flex");
            c.style.display = "none";
            c.classList.remove("d-flex");
            d.classList.remove("d-flex");
            d.style.display = "none";
        }
    }

    myEffect(x, y, z, v, xBtn);
    myEffect(y, z, v, x, yBtn);
    myEffect(z, v, x, y, zBtn);
    myEffect(v, x, y, z, vBtn);


    var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function (event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })


    var txtAbout = 'about me';
    var txtCurriculum = 'curriculum vitae';
    var txtProject = 'i miei progetti';
    var txtContact = 'contattami';

    var idAbout = document.getElementById("aboutTitle")
    var idCurriculum = document.getElementById("curriculumTitle")
    var idProject = document.getElementById("projectTitle")
    var idContact = document.getElementById("contactTitle")

    function typeWriter(a, b) {
        for (let i = 0; i < a.length; i++) {
            setTimeout(() => {
                b.innerHTML += a.charAt(i);
            }, i * 150);
        }
    }

    typeWriter(txtAbout, idAbout);
    typeWriter(txtCurriculum, idCurriculum);
    typeWriter(txtProject, idProject);
    typeWriter(txtContact, idContact);
}
