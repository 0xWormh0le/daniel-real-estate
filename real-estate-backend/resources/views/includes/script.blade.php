    <script>
    jQuery( function( $ ) {
        $( '.aux-sticky-button a[href*=".zip"]' ).click( function() {
        ga('send', 'event', 'Downloads', 'click', 'download-side-btns');
        ga('author_analytics.send', 'event', 'Downloads', 'click', 'download-side-btns');
        });
    })
    </script>
    <script>(function() {function addEventListener(element,event,handler) {
        if(element.addEventListener) {
            element.addEventListener(event,handler, false);
        } else if(element.attachEvent){
            element.attachEvent('on'+event,handler);
        }
    }function maybePrefixUrlField() {
        if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
            this.value = "http://" + this.value;
        }
    }

    var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
    if( urlFields && urlFields.length > 0 ) {
        for( var j=0; j < urlFields.length; j++ ) {
            addEventListener(urlFields[j],'blur',maybePrefixUrlField);
        }
    }/* test if browser supports date fields */
    var testInput = document.createElement('input');
    testInput.setAttribute('type', 'date');
    if( testInput.type !== 'date') {

        /* add placeholder & pattern to all date fields */
        var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
        for(var i=0; i<dateFields.length; i++) {
            if(!dateFields[i].placeholder) {
                dateFields[i].placeholder = 'YYYY-MM-DD';
            }
            if(!dateFields[i].pattern) {
                dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
            }
        }
    }

    })();</script>
   
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{
       
        }};
    /* ]]> */
    </script>
   
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wp_ulike_params = {
      
        };
    /* ]]> */
    </script>
    
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
    </script>
   
   
    <script type='text/javascript'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.5.11","urls":{
        
        },"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_enable_lightbox_in_editor":"yes"}},"post":{"id":454,"title":"Home","excerpt":""}};
    </script>
    
    <!-- end wp_footer -->
