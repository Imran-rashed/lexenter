</div>
    <!-- page-wrapper -->
    <script src='js/jquery-3.4.1.min.js'></script>
    <script src='js/popper.js'></script>
    <script src='js/bootstrap.js'></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.4.2-90/tinymce.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/tagsinput.js"></script>
    <script src="js/script.js"></script>
<script src="https://unpkg.com/vue/dist/vue.min.js"></script>
<script>
    // when life is settled, load up the fun stuff
    document.addEventListener('DOMContentLoaded', function () {
        new Vue({
            el: '#addContext',
            // define data - initial display text
            data(){
                return {
                    applicants:[
                        {
                            details: '',
                            tags:''
                        }
                    ]
                }
            },
            methods : {
                addVisa() {
                    tinymce.init({
                        selector: 'textarea.chi-context-area',
                        height: 280,
                        menubar: false,
                        placeholder: "Context",
                        branding: false,
                        elementpath: false,
                        toolbar: ' | formatselect | ' +
                        'bold italic backcolor | alignleft aligncenter ' +
                        'alignright alignjustify | bullist numlist outdent indent | ' +
                        'removeformat | help',
                        content_style: 'body { font-family:Open Sans,sans-serif; font-size:14px }'
                    });
                    this.applicants.push({
                        details: '',
                        tags: ''
                    })
                },
                deleteVisa(counter) {
                    this.applicants.splice(counter, 1);
                }
            }
        })
    })
</script>


</body>
</html>