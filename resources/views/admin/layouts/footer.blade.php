
    </div>
    <script src="{{asset('js/toastr.min.js')}} "></script>
    <script>
        let acc = document.getElementsByClassName("accordion");
        let i;

        for (i = 0; i < acc.length; i++) {

            acc[i].addEventListener("click", function () {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }

        /*==== Dark Theme =====*/
        let body = document.body;
        let toggleBtn = document.querySelector('.toggle-btn');
        let currentTheme = localStorage.getItem('currentTheme');

        if (currentTheme) {
                body.classList.add('dark-theme');
            }
            toggleBtn.addEventListener('click', function () {
                body.classList.toggle('dark-theme');

            if (body.classList.contains('dark-theme')) {
                localStorage.setItem('currentTheme', 'themeActive');
            } else {
                localStorage.removeItem('currentTheme');
            }
        });

        
    </script>
</body>
    @jquery
    @toastr_js
    @toastr_render
</html>