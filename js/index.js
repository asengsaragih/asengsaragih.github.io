function loadData() {
    $.getJSON("data.json", function (data) {
        //home section
        document.getElementById('home-name').innerHTML = data.home.name;
        document.getElementById('home-description').innerHTML = data.home.description;
        socialmedia(document.getElementById('home-social-media'), data.social_media);

        //about section
        document.getElementById('about-pic').src = data.about.profile_pic;
        document.getElementById('about-description').innerHTML = data.about.description;
        document.getElementById('about-contact').innerHTML = data.about.detail_contact;
        document.getElementById('about-cv').innerHTML = "<a href='" + data.about.cv + "' class='button'><i class='fa fa-download'></i>Unduh CV</a>";

        //biograph section
        education(data.biograph.educations);
        experiences(data.biograph.experiences);

        //portofolio section
        portofolio(data.portofolio);

        //footer section
        socialmedia(document.getElementById('footer-social-media'), data.social_media);
    });
}

//function for showing portofilio with looping
function portofolio(obj) {
    var columnStart = "<div class='twelve columns collapsed'><h1>Portofolio Android & Website</h1><div id='portfolio-wrapper' class='bgrid-quarters s-bgrid-thirds cf'>";
    var columnEnd = "</div></div>";
    var wrapper = "";
    var modal = "";

    for (let i = 0; i < obj.length; i++) {
        var num = "modal-" + (i + 1);
        const el = obj[i];

        wrapper += "<div class='columns portfolio-item'><div class='item-wrap'><a href='#"+num+"'><img alt='' src='" + el.image + "'><div class='overlay'><div class='portfolio-item-meta'><h5>" + el.title + "</h5><p>" + el.short_label + "</p></div></div><div class='link-icon'><i class='icon-plus'></i></div></a></div></div>";
        
        modal += "<div id='" + num + "' class='popup-modal mfp-hide'><img class='scale-with-grid' src='" + el.modals_image + "' alt=''/><div class='description-box'><h4>" + el.short_desc + "</h4><p>" + el.long_desc + ".</p><span class='categories'><i class='fa fa-tag'></i>" + el.long_label + "</span></div><div class='link-box'><a href='" + el.preview_url + "'>Details</a><a class='popup-modal-dismiss'>Close</a></div></div>";
    }

    document.getElementById('portofolio').innerHTML = columnStart + wrapper + columnEnd + modal;

    //modal popup
    $('.item-wrap a').magnificPopup({
        type:'inline',
        fixedContentPos: false,
        removalDelay: 200,
        showCloseBtn: false,
        mainClass: 'mfp-fade'
     });
 
     $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
     });
}

//function for showing education with looping
function education(obj) {
    var result = "";

    obj.forEach(x => {
        var date = "";
        x.end_date != null ? date = x.start_date + " - " + x.end_date : date = x.start_date + " - Sekarang";

        result += "<div class='row item'><div class='twelve columns'><h3>" + x.title + "</h3><p class='info'>" + x.description + " <span>&bull;</span> <em class='date'>" + date + "</em></p><p></p></div></div> ";
    });

    document.getElementById('biograph-educations').innerHTML = result;
}

//function for showing experience with looping
function experiences(obj) {
    var result = "";

    obj.forEach(x => {
        var date = "";
        x.end_date != null ? date = x.start_date + " - " + x.end_date : date = x.start_date + " - Sekarang";

        result += "<div class='row item'><div class='twelve columns'><h3>" + x.title + "</h3><p class='info'>" + x.type + " <span>&bull;</span> <em class='date'>" + date + "</em></p><p>" + x.description + "</p></div></div>";
    });

    document.getElementById('biograph-experiences').innerHTML = result;
}

//function for showing social media with looping
function socialmedia(element, obj) {
    var result = "";

    obj.forEach(x => {
        result += "<li><a href='" + x.link + "' target='_blank'><i class='" + x.icon + "'></i></a></li>";
    });

    element.innerHTML = result;
}