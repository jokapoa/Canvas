<script type="text/javascript">
    $(document).ready(function(){
        $(window).load(function(){
            function notify(message, type){
                $.growl({
                    message: message
                },{
                    type: type,
                    allow_dismiss: false,
                    label: 'Cancel',
                    className: 'btn-xs btn-inverse',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 4000,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },
                    offset: {
                        x: 20,
                        y: 85
                    }
                });
            };

            setTimeout(function () {
                var message = '<strong>Pro Tip</strong>: Use &#8984;+s to save a form on a Mac, CTL+s on a PC.';
                notify(message, 'inverse');
            }, 300)
        });
    });
</script>