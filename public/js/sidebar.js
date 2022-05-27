let body = document.querySelector("body"),
      sidebar = $('.sidebar'),
      searchBtn = document.querySelector(".search-box"),
      modeSwitch = document.querySelector(".toggle-switch"),
      lightMode = $(".light-mode"),
      DarkMode = $(".dark-mode"),
      toggle = document.querySelector(".toggle");

toggle.addEventListener('click', function () {
    sidebar.toggleClass('close')
})
searchBtn.addEventListener('click', function () {
    sidebar.removeClass('close');
})

modeSwitch.addEventListener('click', function () {
    body.classList.toggle('dark');

    if (body.classList.contains('dark')) {
        DarkMode.removeClass('hidden-mode-btn');
        lightMode.addClass('hidden-mode-btn');
    } else {
        lightMode.removeClass('hidden-mode-btn');
        DarkMode.addClass('hidden-mode-btn');
    }
})

$(document).ready(function (){
    let data_title = document.querySelectorAll("[data-title]");
    for (let i = 0; i < data_title.length; i++) {
        $(data_title[i]).tooltip({
            text: $(data_title[i]).attr('data-title'),
            fontSize: '14px'
        })
    }
})
