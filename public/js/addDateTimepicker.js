
   // Waiting for the DOM ready...
        function datepResize() {
            // Get width of parent container
            var width = jQuery("#datetimepicker").width(); //attr('clientWidth');
            if (width == null || width < 1){
                // For IE, revert to offsetWidth if necessary
                width = jQuery("#datetimepicker").attr('offsetWidth');
            }
            width = width - 2; // Fudge factor to prevent horizontal scrollbars
            if (width > 0 &&
                // Only resize if new width exceeds a minimal threshold
                // Fixes IE issue with in-place resizing when mousing-over frame bars
                Math.abs(width - jQuery("div ui-datepicker").width()) > 5)
            {
                if (width < 166){
                    jQuery("div.ui-datepicker").css({'font-size': '8px'});
                    jQuery(".ui-datepicker td .ui-state-default").css({'padding':'0px','font-size': '6px'});
                }
                else if (width > 228){
                    jQuery("div.ui-datepicker").css({'font-size': '13px','margin-top':'290px'});
                    jQuery(".ui-datepicker td .ui-state-default").css({'padding':'5px','font-size': '100%'});

                }
                else{
                    jQuery("div.ui-datepicker").css({'font-size': (width-43)/16+'px'});
                }
            }
        }
        $(function(){
                $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
                dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            
            var nowDate = new Date();
            $.datepicker.setDefaults( $.datepicker.regional[ "es" ] );
            $.extend($.datepicker,{_checkOffset:function(inst,offset,isFixed){return offset}});
            $( ".datetimepicker" ).datetimepicker({
                timeFormat: 'HH:mm',
                 minDate: new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), nowDate.getHours(), nowDate.getMinutes(), 0, 0),
                beforeShow: function (input, inst) {
                    setTimeout(function () {
                        //datepResize();
                    }, 0);
                }
            });
        });