var acc = document.getElementsByClassName('accordion');
let accBtns = document.querySelector('.btn-info');

var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener('click', function() {
        // Toggle between 'active' class
        this.classList.toggle('active');

        // Toggle between hiding and showing
        var panel = this.nextElementSibling;
        if(panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight =panel.scrollHeight + 'px';
        }
    });
}



// $("#code-intro").on("hide.bs.collapse", function() {
//     $("#code-intro").html('View More...');
// })

// $("#code-intro").on("show.bs.collapse", function() {
//     $("#code-intro").html('View Less...');
// })

// $("#code-intro1").on("hide.bs.collapse", function() {
//     $(".btn").html('View More...');
// })

// $("#code-intro1").on("show.bs.collapse", function() {
//     $(".btn").html('View Less...');
// })