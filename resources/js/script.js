window.onload = function () {


    document.getElementById('home-nav').onclick = function () {
        var x = document.getElementById("home");
        var y = document.getElementById("cv");
        var z = document.getElementById("contact");
        var v = document.getElementById("project");
        x.style.display = "block";
        x.classList.add("d-flex");
        y.style.display = "none";
        y.classList.remove("d-flex");
        z.style.display = "none";
        z.classList.remove("d-flex");
        v.classList.remove("d-flex");
        v.style.display = "none";

    }

    document.getElementById('cv-nav').onclick = function () {
        var x = document.getElementById("cv");
        var y = document.getElementById("home");
        var z = document.getElementById("contact");
        var v = document.getElementById("project");
        x.style.display = "block";
        y.classList.remove("d-flex");
        y.style.display = "none";
        z.classList.remove("d-flex");
        z.style.display = "none";
        v.classList.remove("d-flex");
        v.style.display = "none";

    }

    document.getElementById('contact-nav').onclick = function () {
        var x = document.getElementById("contact");
        var y = document.getElementById("home");
        var z = document.getElementById("cv");
        var v = document.getElementById("project");
        x.style.display = "block";
        y.classList.remove("d-flex");
        y.style.display = "none";
        z.classList.remove("d-flex");
        z.style.display = "none";
        v.classList.remove("d-flex");
        v.style.display = "none";

    }

    document.getElementById('project-nav').onclick = function () {
        var v = document.getElementById("project");
        var x = document.getElementById("contact");
        var y = document.getElementById("home");
        var z = document.getElementById("cv");
        v.style.display = "block";
        y.classList.remove("d-flex");
        y.style.display = "none";
        z.classList.remove("d-flex");
        z.style.display = "none";
        x.classList.remove("d-flex");
        x.style.display = "none";

    }

    var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function (event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })



}