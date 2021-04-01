var API_URL = "https://portofolio-aseng.herokuapp.com/api/api-data";

$.getJSON(API_URL, function(data) {
    var overview = data['overview'];
    var about = data['about'];
    var contact = data['contact'];
    var cv = data['cv'];
    var education = data['education'];
    var experience = data['experience'];
    var portofolio = data['portofolio'];

    //overview
    document.getElementById('overview-content').innerHTML = overview['content'];

    //about
    document.getElementById('about-content').innerHTML = about['content'];

    //contact
    document.getElementById('contact-fullname').innerHTML = contact['fullname'];
    document.getElementById('contact-address').innerHTML = contact['address'];
    document.getElementById('contact-phone').innerHTML = contact['phone'];
    document.getElementById('contact-email').innerHTML = contact['email'];

    //education
    var educationBox = document.getElementById('education-view');

    for (let i = 0; i < education.length; i++) {
        const element = education[i];

        educationBox.innerHTML += "<div class='row item'> " +
        "<div class='twelve columns'>" +
        "<h3>"+ element['school_name'] + "</h3>" +
        "<p class='info'>" +
        element['program_study'] +
        "<span>&bull;</span> " +
        "<em class='date'>" + element['graduation_year'] + "</em>" +
        "</p>" +
        "<p></p></div></div>";
    }

    //experiences
    var experienceBox = document.getElementById('experience-view');

    for (let i = 0; i < experience.length; i++) {
        const element = experience[i];

        experienceBox.innerHTML += "<div class='row item'>" +
        "<div class='twelve columns'>" +
        "<h3>" + element['company_name'] + "</h3>" +
        "<p class='info'>" + element['job_type'] + " - " + element['job_division'] + " <span>&bull;</span> <em class='date'>" + element['start_date'] + " - " + element['end_date'] + "</em></p>" +
        "<p>" + element['job_desc'] + "</p>" +
        "</div>" +
        "</div>";
    }
});
