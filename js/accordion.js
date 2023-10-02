var acc = document.getElementsByClassName('accordion');
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