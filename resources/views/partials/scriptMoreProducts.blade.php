<script>

    $(document).ready(function () {


        $("#extrasKit").val(0);


        $(".add-tv").click(function () {

            var totalElement = $(this).siblings('span').html();

            totalElement = parseInt(totalElement) + 1;

            $(this).siblings('span').html(totalElement);

            totalPrice();

        });


        $(".remove-tv").click(function () {

            var totalElement = $(this).siblings('span').html();

            if (totalElement >= 1)
            {
                totalElement = parseInt(totalElement) - 1;

                $(this).siblings('span').html(totalElement);
            }

            totalPrice();

        });

    });

    function totalPrice() {


        var total = (parseInt($(".total-cajas").html()) * 6500) + (parseInt($(".total-bolsas").html()) * 1700) + (parseInt($(".total-papelBurbuja").html()) * 1500) + (parseInt($(".total-cinta").html()) * 5900) + (parseInt($(".total-marcadores").html()) * 1000) + (parseInt($(".total-kraft").html()) * 800);

        $("#extrasKit").val(total);

        addOnlyProducts();

        if (total > 0)
            $("#extraProductsOk").val(true);

        $(".actualExtraModal").val(total);

        total = new Intl.NumberFormat().format(total);

        $(".actualExtra").html(total);

        if (total == 0)
        {
            $(".hasMoreProducts").addClass("ocultar");
            $(".hasMoreProducts").removeClass("mostrar")
        }
        else
        {
            $(".hasMoreProducts").addClass("mostrar");
            $(".hasMoreProducts").removeClass("ocultar")

        }

    }

    function addOnlyProducts() {

       $("#total-cajas").val($(".total-cajas").html());
       $("#total-bolsas").val($(".total-bolsas").html());
       $("#total-papelBurbuja").val($(".total-papelBurbuja").html());
       $("#total-cinta").val($(".total-cinta").html());
       $("#total-marcadores").val($(".total-marcadores").html());
       $("#total-kraft").val($(".total-kraft").html());

    }

</script>

<script>
    var $win = $(window);

    // definir mediente $pos la altura en píxeles desde el borde superior de la ventana del navegador y el elemento

    var $pos = 424;

    $win.scroll(function () {

        if ($win.scrollTop() <= $pos)

            $('.carrito').addClass('ocultar');

        else {

            $('.carrito').removeClass('ocultar');

        }

    });
</script>