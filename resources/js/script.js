window.onload = function () {


    document.getElementById('home-nav').onclick = function () {
        var x = document.getElementById("home");
        var y = document.getElementById("cv");
        var z = document.getElementById("contact");
        x.style.display = "block";
        x.classList.add("d-flex");
        y.style.display = "none";
        y.classList.remove("d-flex");
        z.style.display = "none";
        z.classList.remove("d-flex");

    }

    document.getElementById('cv-nav').onclick = function () {
        var x = document.getElementById("cv");
        var y = document.getElementById("home");
        var z = document.getElementById("contact");
        x.style.display = "block";
        y.classList.remove("d-flex");
        y.style.display = "none";
        z.classList.remove("d-flex");
        z.style.display = "none";

    }

    document.getElementById('contact-nav').onclick = function () {
        var x = document.getElementById("contact");
        var y = document.getElementById("home");
        var z = document.getElementById("cv");
        x.style.display = "block";
        y.classList.remove("d-flex");
        y.style.display = "none";
        z.classList.remove("d-flex");
        z.style.display = "none";

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